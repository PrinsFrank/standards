<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use PrinsFrank\PdfParser\PdfParser;
use PrinsFrank\Standards\CountryCallingCode\CountryCallingCode;
use PrinsFrank\Standards\Dev\DataSource\Sorting\KeySorting;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\SpecFile;
use RuntimeException;
use stdClass;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet of object{countryCallingCode: int, countryName: string}&stdClass
 * @implements Mapping<TDataSet>
 */
class CountryCallingCodeMapping implements Mapping {
    public static function url(): string {
        return 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf';
    }

    public static function toDataSet(Client $client, Crawler $crawler): array {
        $document = (new PdfParser())
            ->parseFile(self::url());

        /** @var list<TDataSet> $dataSet */
        $dataSet = [];
        foreach ($document->getPages() as $page) {
            $pageText = $page->getText();
            if (!str_starts_with(ltrim($pageText), 'List of Rec. ITU-T E.164 assigned country codes - alphabetical order')) {
                continue;
            }

            if (preg_match_all('/^(?<countryCallingCode>\d{1,3})(?<countryName>.*)$/m', $pageText, $matches, PREG_SET_ORDER) === false) {
                throw new RuntimeException('Unable to parse page text');
            }

            foreach ($matches as $match) {
                /** @var TDataSet $record */
                $record = new stdClass();
                $record->countryCallingCode = (int) $match['countryCallingCode'];
                $record->countryName = trim($match['countryName']);
                if (substr($record->countryName, -2, 1) === ' ') {
                    $record->countryName = substr($record->countryName, 0, -2); // Remove notes
                }

                $dataSet[] = $record;
            }
        }

        return $dataSet;
    }

    public static function toEnumMapping(array $dataSet): array {
        $countryCallingCode = new SpecFile(CountryCallingCode::class, KeySorting::class);
        foreach ($dataSet as $dataRow) {
            if ($dataRow->countryName === 'Spare code') {
                continue;
            }

            $countryCallingCode->addCase(new EnumCase($dataRow->countryName, $dataRow->countryCallingCode, []));
        }

        return [$countryCallingCode];
    }
}
