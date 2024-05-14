<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev\DataSource\Mapping;

use PrinsFrank\Standards\Dev\DataSource\Sorting\KeyWithDeprecatedTagsSeparateSorting;
use PrinsFrank\Standards\Dev\DataSource\Sorting\SortingInterface;
use PrinsFrank\Standards\Dev\DataTarget\EnumCase;
use PrinsFrank\Standards\Dev\DataTarget\EnumFile;
use PrinsFrank\Standards\InvalidArgumentException;
use PrinsFrank\Standards\LanguageTag\LanguageTagVariant;
use stdClass;
use Symfony\Component\Panther\Client;
use Symfony\Component\Panther\DomCrawler\Crawler;

/**
 * @template TDataSet of object{Type: string, Subtag: string, Description: string, Added: string, SuppressScript: string, Scope: string, Macrolanguage: string, Comments: string, Deprecated: string, PreferredValue: string, Prefix: string, Tag: string}&stdClass
 * @implements Mapping<TDataSet>
 */
class LanguageSubTagMapping implements Mapping
{
    public static function url(): string
    {
        return 'https://www.iana.org/assignments/language-subtag-registry/language-subtag-registry';
    }

    /**
     * @throws InvalidArgumentException
     * @return list<TDataSet>
     */
    public static function toDataSet(Client $client, Crawler $crawler): array
    {
        $dataSet = [];
        foreach (explode('%%', $client->getPageSource()) as $i => $item) {
            if($i === 0) {
                continue;
            }

            if(preg_match_all('/(?P<key>[A-Za-z-]+): (?P<value>.+)/', $item, $matches, PREG_SET_ORDER) <= 0) {
                throw new InvalidArgumentException('Invalid record encountered');
            }

            $record = (object) [];
            foreach ($matches as $match) {
                /** @phpstan-ignore offsetAccess.notFound */
                $value = $match['value'];
                /** @phpstan-ignore offsetAccess.notFound */
                match ($match['key']) {
                    'Type' => $record->Type = $value,
                    'Subtag' => $record->Subtag = $value,
                    'Description' => $record->Description = $value,
                    'Added' => $record->Added = $value,
                    'Suppress-Script' => $record->SuppressScript = $value,
                    'Scope' => $record->Scope = $value,
                    'Macrolanguage' => $record->Macrolanguage = $value,
                    'Comments' => $record->Comments = $value,
                    'Deprecated' => $record->Deprecated = $value,
                    'Preferred-Value' => $record->PreferredValue = $value,
                    'Prefix' => $record->Prefix = $value,
                    'Tag' => $record->Tag = $value,
                    'as' => null,
                    default => throw new InvalidArgumentException('Unrecognized key "' . $match['key'] . '"'),
                };
            }

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
        $languageTagVariant = new EnumFile(LanguageTagVariant::class);
        foreach ($dataSet as $dataRow) {
            /** @var TDataSet $dataRow */
            if ($dataRow->Type !== 'variant') {
                continue;
            }

            $languageTagVariant->addCase(new EnumCase($dataRow->Description, $dataRow->Subtag, [], ($dataRow->Deprecated ?? null) !== null));
        }

        return [$languageTagVariant];
    }

    public static function getSorting(): SortingInterface
    {
        return new KeyWithDeprecatedTagsSeparateSorting();
    }
}
