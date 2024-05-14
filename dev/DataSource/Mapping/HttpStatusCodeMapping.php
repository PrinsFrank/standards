<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use Facebook\WebDriver\WebDriverBy;
use PrinsFrank\Standards\Dev\DataSource\Sorting\SortingInterface;
use PrinsFrank\Standards\Dev\DataSource\Sorting\ValueWithDeprecatedTagsSeparateSorting;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use PrinsFrank\Standards\Http\HttpStatusCode;
use RuntimeException;
use stdClass;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet of object{value: string, description: string, reference: string}&stdClass
 * @implements Mapping<TDataSet>
 */
class HttpStatusCodeMapping implements Mapping
{
    public static function url(): string
    {
        return 'https://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml';
    }

    /**
     * @throws RuntimeException
     * @return list<TDataSet>
     */
    public static function toDataSet(Client $client, Crawler $crawler): array
    {
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
            $record->description = $columns[1]->getText();
            $record->reference = $columns[2]->getText();

            /** @var TDataSet $record */
            $dataSet[] = $record;
        }

        return $dataSet;
    }

    /**
     * @param list<TDataSet> $dataSet
     * @return array<EnumFile>
     */
    public static function toEnumMapping(array $dataSet): array
    {
        $httpMethod = new EnumFile(HttpStatusCode::class);
        foreach ($dataSet as $dataRow) {
            if (in_array($dataRow->description, ['Unassigned', '(Unused)'], true)) {
                continue;
            }

            $httpMethod->addCase(new EnumCase($dataRow->description, (int) $dataRow->value));
        }

        return [$httpMethod];
    }

    public static function getSorting(): SortingInterface
    {
        return new ValueWithDeprecatedTagsSeparateSorting();
    }
}
