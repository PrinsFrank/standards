<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Country\UserAssigned;

/**
 * @source https://www.icao.int/publications/Documents/9303_p3_cons_en.pdf Page 29, chapter 5, section A-G
 *
 * @manually-updated
 */
enum TravelDocumentAlpha2: string {
    case European_Union = 'EU';
    case United_Nations = 'UN';

    /** @deprecated in ISO3166, but maintained here for backwards compatibility */
    case Netherlands_Antilles = 'AN';

    /** @deprecated in ISO3166, but maintained here for backwards compatibility */
    case Neutral_Zone = 'NT';

    /** Used in specimen documents */
    case Utopia = 'UT';

    /** Used by ICAO when digitally signing a master list */
    case International_Civil_Aviation_Organization = 'IA';
}
