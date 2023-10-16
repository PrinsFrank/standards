<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Region;

/**
 * @standard https://unstats.un.org/unsd/methodology/m49/
 */
enum GeographicRegion: string
{
    case World = '001';
    case Africa = '002';
    case Northern_Africa = '015';
    case Sub_Saharan_Africa = '202';
    case Eastern_Africa = '014';
    case Middle_Africa = '017';
    case Southern_Africa = '018';
    case Western_Africa = '011';
    case Americas = '019';
    case Latin_America_And_The_Caribbean = '419';
    case Caribbean = '029';
    case Central_America = '013';
    case South_America = '005';
    case Northern_America = '021';
    case Antarctica = '010';
    case Asia = '142';
    case Central_Asia = '143';
    case Eastern_Asia = '030';
    case South_Eastern_Asia = '035';
    case Southern_Asia = '034';
    case Western_Asia = '145';
    case Europe = '150';
    case Eastern_Europe = '151';
    case Northern_Europe = '154';
    case Southern_Europe = '039';
    case Western_Europe = '155';
    case Landlocked_Developing_Countries = '432';
    case Least_Developed_Countries = '199';
    case Oceania = '009';
    case Australia_And_New_Zealand = '053';
    case Melanesia = '054';
    case Micronesia = '057';
    case Polynesia = '061';
    case Small_Island_Developing_States = '722';

    /**
     * @return array<GeographicRegion>
     */
    public function getDirectSubRegions(): array
    {
        return match ($this) {
            self::World => [
                self::Africa,
                self::Americas,
                self::Antarctica,
                self::Asia,
                self::Europe,
                self::Landlocked_Developing_Countries,
                self::Least_Developed_Countries,
                self::Oceania,
                self::Small_Island_Developing_States,
            ],
            self::Africa => [
                self::Northern_Africa,
                self::Sub_Saharan_Africa,
            ],
            self::Sub_Saharan_Africa => [
                self::Eastern_Africa,
                self::Middle_Africa,
                self::Southern_Africa,
                self::Western_Africa,
            ],
            self::Americas => [
                self::Latin_America_And_The_Caribbean,
                self::Northern_America,
            ],
            self::Latin_America_And_The_Caribbean => [
                self::Caribbean,
                self::Central_America,
                self::South_America,
            ],
            self::Asia => [
                self::Central_Asia,
                self::Eastern_Asia,
                self::South_Eastern_Asia,
                self::Southern_Asia,
                self::Western_Asia,
            ],
            self::Europe => [
                self::Eastern_Europe,
                self::Northern_Europe,
                self::Southern_Europe,
                self::Western_Europe,
            ],
            self::Oceania => [
                self::Australia_And_New_Zealand,
                self::Melanesia,
                self::Micronesia,
                self::Polynesia,
            ],
            default => [],
        };
    }

    /** @return array<GeographicRegion> */
    public function getAllSubRegions(): array
    {
        $subRegions = [];
        foreach ($this->getDirectSubRegions() as $subRegion) {
            $subRegions[] = $subRegion;
            foreach ($subRegion->getAllSubRegions() as $indirectSubRegion) {
                $subRegions[] = $indirectSubRegion;
            }
        }

        return $subRegions;
    }
}
