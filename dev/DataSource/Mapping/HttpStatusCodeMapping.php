<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use DateTimeImmutable;
use Exception;
use Facebook\WebDriver\WebDriverBy;
use PrinsFrank\Standards\Dev\DataSource\Sorting\ValueSorting;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumCaseAttribute;
use PrinsFrank\Standards\Dev\DataTarget\SpecFile;
use PrinsFrank\Standards\Http\Attributes\TemporaryAssignment;
use PrinsFrank\Standards\Http\HttpStatusCode;
use PrinsFrank\Standards\InvalidArgumentException;
use RuntimeException;
use stdClass;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet of object{value: string, description: string, reference: string, note: ?string}&stdClass
 * @implements Mapping<TDataSet>
 */
class HttpStatusCodeMapping implements Mapping {
    public static function url(): string {
        return 'https://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml';
    }

    /**
     * @throws RuntimeException
     * @return list<TDataSet>
     */
    public static function toDataSet(Client $client, Crawler $crawler): array {
        $items = $crawler->filterXPath('//table[@id="table-http-status-codes-1"]/tbody/tr')->getIterator();

        $dataSet = [];
        foreach ($items as $item) {
            $columns = $item->findElements(WebDriverBy::xpath('./td'));
            if (array_key_exists(0, $columns) === false
                || array_key_exists(1, $columns) === false
                || array_key_exists(2, $columns) === false) {
                throw new RuntimeException('Expected exactly 3 columns');
            }

            $record = (object) [];
            $record->value = $columns[0]->getText();
            preg_match('/^(?<description>[^\(]*)(?<note>\(.*\))?$/', $columns[1]->getText(), $matches);
            $description = $matches['description'] ?? '';
            $note = $matches['note'] ?? null;
            $record->description = $description !== '' ? $description : $note;
            $record->note = $note !== null ? trim($note, '()') : null;
            $record->reference = $columns[2]->getText();

            /** @var TDataSet $record */
            $dataSet[] = $record;
        }

        return $dataSet;
    }

    /**
     * @param list<TDataSet> $dataSet
     * @throws Exception
     * @return array<SpecFile>
     */
    public static function toEnumMapping(array $dataSet): array {
        $httpMethod = new SpecFile(HttpStatusCode::class, ValueSorting::class);
        foreach ($dataSet as $dataRow) {
            if (in_array($dataRow->description, ['Unassigned', '(Unused)'], true)) {
                continue;
            }

            $attributes = [];
            if ($dataRow->note !== null && str_contains(strtolower($dataRow->note), 'temporary')) {
                preg_match('/expires (?<expiryDate>[0-9]{4}-[0-9]{2}-[0-9]{2})/', $dataRow->note, $expiresAt);
                $attributes[] = new EnumCaseAttribute(TemporaryAssignment::class, [new DateTimeImmutable($expiresAt['expiryDate'] ?? throw new InvalidArgumentException())]);
            }

            $httpMethod->addCase(new EnumCase($dataRow->description, (int) $dataRow->value, $attributes));
        }

        return [$httpMethod];
    }
}
