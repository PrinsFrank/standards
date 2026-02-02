<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use Facebook\WebDriver\WebDriverBy;
use Override;
use PrinsFrank\Standards\Dev\DataSource\Sorting\KeySorting;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumCaseAttribute;
use PrinsFrank\Standards\Dev\DataTarget\SpecFile;
use PrinsFrank\Standards\URIScheme\Attributes\Status;
use PrinsFrank\Standards\URIScheme\URIScheme;
use PrinsFrank\Standards\URIScheme\URISchemeStatus;
use RuntimeException;
use stdClass;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;
use TypeError;
use ValueError;

/**
 * @template TDataSet of object{name: string, template: string, description: string, status: string, wellKnown: string, reference: string, notes: string}&stdClass
 * @implements Mapping<TDataSet>
 */
class URISchemeMapping implements Mapping {
    #[Override]
    public static function url(): string {
        return 'https://www.iana.org/assignments/uri-schemes/uri-schemes.xhtml';
    }

    /**
     * @throws RuntimeException
     * @return list<TDataSet>
     */
    #[Override]
    public static function toDataSet(Client $client, Crawler $crawler): array {
        $dataSet = [];
        foreach ($crawler->filterXPath('//table[@id="table-uri-schemes-1"]/tbody/tr')->getIterator() as $item) {
            $columns = $item->findElements(WebDriverBy::xpath('./td'));
            if ($columns === []) {
                continue;
            }

            if (array_key_exists(0, $columns) === false
                || array_key_exists(1, $columns) === false
                || array_key_exists(2, $columns) === false
                || array_key_exists(3, $columns) === false
                || array_key_exists(4, $columns) === false
                || array_key_exists(5, $columns) === false
                || array_key_exists(6, $columns) === false) {
                throw new RuntimeException('Expected exactly 7 columns');
            }

            $record = (object) [];
            $record->name = $columns[0]->getText();
            $record->template = $columns[1]->getText();
            $record->description = $columns[2]->getText();
            $record->status = $columns[3]->getText();
            $record->wellKnown = $columns[4]->getText();
            $record->reference = $columns[5]->getText();
            $record->notes = $columns[6]->getText();

            /** @var TDataSet $record */
            $dataSet[] = $record;
        }

        return $dataSet;
    }

    /**
     * @param list<TDataSet> $dataSet
     * @throws TypeError|ValueError
     * @return array<SpecFile>
     */
    #[Override]
    public static function toEnumMapping(array $dataSet): array {
        $URIScheme = new SpecFile(URIScheme::class, KeySorting::class);
        foreach ($dataSet as $dataRow) {
            $URIScheme->addCase(new EnumCase($dataRow->name, $dataRow->name, [new EnumCaseAttribute(Status::class, [URISchemeStatus::from($dataRow->status)])]));
        }

        return [$URIScheme];
    }
}
