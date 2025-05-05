<?php declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use PrinsFrank\PdfParser\PdfParser;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

class CountryCallingCodeMapping implements Mapping {
    public static function url(): string {
        return 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf';
    }

    public static function toDataSet(Client $client, Crawler $crawler): array {
        $document = (new PdfParser())
            ->parseFile(self::url());

        $text = '';
        for ($i = 3; $i < 10; $i++) {
            $text .= trim(
                str_replace(
                    [
                        'List of Rec. ITU-T E.164 assigned country codes - numerical order',
                        'Country code Country, Geographical area or Global service Note',
                        sprintf('Annex to ITU OB 1114-E –     %d    –  ', $i)
                    ],
                    '',
                    $document->getPage($i)->getText(),
                )
            );
        }
    }

    public static function toEnumMapping(array $dataSet): array
    {
        // TODO: Implement toEnumMapping() method.
    }
}
