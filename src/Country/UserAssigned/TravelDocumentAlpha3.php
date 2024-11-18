<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Country\UserAssigned;

/**
 * @source https://www.icao.int/publications/Documents/9303_p3_cons_en.pdf Page 29, chapter 5, section A-G
 *
 * @manually-updated
 */
enum TravelDocumentAlpha3: string {
    case European_Union = 'EUE';
    case United_Nations_Organization_or_one_of_its_officials = 'UNO';
    case United_Nations_specialized_agency_or_one_of_its_officials = 'UNA';

    /**
     * Resident of Kosovo to whom a travel document has been issued
     * by the United Nations Interim Administration Mission in Kosovo
     * (UNMIK)
     */
    case Resident_of_Kosovo_issued_by_UNMIK = 'UNK';

    /** ADB */
    case African_Development_Bank = 'XBA';

    /** AFREXIM bank */
    case African_Export_Import_Bank = 'XIM';

    /** CARICOM */
    case Caribbean_Community_or_one_of_its_emissaries = 'XCC';
    case Council_of_Europe = 'XCE';

    /** COMESA */
    case Common_Market_for_Eastern_and_Southern_Africa = 'XCO';

    /** ECOWAS */
    case Economic_Community_of_West_African_States = 'XEC';

    /** INTERPOL */
    case International_Criminal_Police_Organization = 'XPO';

    /** OECS */
    case Organization_of_Eastern_Caribbean_States = 'XES';

    /** PAM */
    case Parliamentary_Assembly_of_the_Mediterranean = 'XMP';
    case Sovereign_Military_Order_of_Malta_or_one_of_its_emissaries = 'XOM';
    case Southern_African_Development_Community = 'XDC';

    /**
     * Stateless person, as defined in Article 1 of the 1954 Convention
     * Relating to the Status of Stateless Persons
     */
    case Stateless_Person = 'XXA';

    /**
     * Refugee, as defined in Article 1 of the 1951 Convention Relating to
     * the Status of Refugees as amended by the 1967 Protocol
     */
    case Refugee = 'XXB';

    /**
     * Refugee, other than as defined under the code XXB above
     */
    case Refugee_other = 'XXC';

    /**
     * Person of unspecified nationality, for whom issuing State does not
     * consider it necessary to specify any of the codes XXA, XXB or XXC
     * above, whatever that person’s status may be. This category may
     * include a person who is neither stateless nor a refugee but who is
     * of unknown nationality and legally residing in the State of issue.
     */
    case Person_of_unspecified_nationality = 'XXX';

    /** @deprecated in ISO3166, but maintained here for backwards compatibility */
    case Netherlands_Antilles = 'ANT';

    /** @deprecated in ISO3166, but maintained here for backwards compatibility */
    case Neutral_Zone = 'NTZ';

    /**
     * In order to establish a standardized way to identify specimen documents, it is recommended to set the nationality of the
     * document holder to “Utopia” for sample documents.
     */
    case Utopia = 'UTO';

    /** Used by ICAO when digitally signing a master list */
    case International_Civil_Aviation_Organization = 'IAO';

    public function toTravelDocumentAlpha2(): ?TravelDocumentAlpha2 {
        return match ($this) {
            self::European_Union => TravelDocumentAlpha2::European_Union,
            self::United_Nations_Organization_or_one_of_its_officials,
            self::United_Nations_specialized_agency_or_one_of_its_officials => TravelDocumentAlpha2::United_Nations,
            self::Netherlands_Antilles => TravelDocumentAlpha2::Netherlands_Antilles,
            self::Neutral_Zone => TravelDocumentAlpha2::Neutral_Zone,
            self::Utopia => TravelDocumentAlpha2::Utopia,
            self::International_Civil_Aviation_Organization => TravelDocumentAlpha2::International_Civil_Aviation_Organization,
            default => null,
        };
    }
}
