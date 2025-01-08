<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Dev;

use PrinsFrank\Standards\TopLevelDomain\CountryCodeTLD;
use PrinsFrank\Standards\TopLevelDomain\GenericRestrictedTLD;
use PrinsFrank\Standards\TopLevelDomain\GenericTLD;
use PrinsFrank\Standards\TopLevelDomain\InfrastructureTLD;
use PrinsFrank\Standards\TopLevelDomain\SponsoredTLD;
use PrinsFrank\Standards\TopLevelDomain\TestTLD;

class TopLevelDomainLister
{
    public static function writeFile(): void
    {
        $tlds = array_merge(
            CountryCodeTLD::cases(),
            GenericRestrictedTLD::cases(),
            GenericTLD::cases(),
            InfrastructureTLD::cases(),
            SponsoredTLD::cases(),
            TestTLD::cases()
        );

        $assignedTlds = array_reduce($tlds, static function ($carry, $tld) {
            if ($tld->isAssigned()) {
                $activeTlds[] = strtoupper(idn_to_ascii($tld->value));
            }

            return $carry;
        });

        file_put_contents('./tlds.txt', implode("\n", $assignedTlds));
    }
}
