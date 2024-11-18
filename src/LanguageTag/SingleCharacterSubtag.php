<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\LanguageTag;

/**
 * @standard RFC5646
 * @source https://datatracker.ietf.org/doc/html/rfc5646
 *
 * @manually-updated
 */
enum SingleCharacterSubtag: string {
    /**
     * @see https://datatracker.ietf.org/doc/html/rfc5646#section-2.2.1
     *
     * The single-character subtag 'x' as the primary subtag indicates
     * that the language tag consists solely of subtags whose meaning is
     * defined by private agreement.  For example, in the tag "x-fr-CH",
     * the subtags 'fr' and 'CH' do not represent the French language or
     * the country of Switzerland (or any other value in the IANA
     * registry) unless there is a private agreement in place to do so.
     * See Section 4.6.
     */
    case PRIVATE_USE = 'x';

    /**
     * @see https://datatracker.ietf.org/doc/html/rfc5646#section-2.2.1
     *
     * The single-character subtag 'i' is used by some grandfathered tags
     * (see Section 2.2.8) such as "i-klingon" and "i-bnn".  (Other
     * grandfathered tags have a primary language subtag in their first
     * position.)
     */
    case GRANDFATHERED = 'i';
}
