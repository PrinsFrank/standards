<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Tests\Unit\Language;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use PrinsFrank\Standards\Language\LanguageName;

#[CoversClass(LanguageName::class)]
class LanguageNameTest extends TestCase {
    public function testAllCasesCanBeConvertedToLanguageAlpha3Bibliographic(): void {
        foreach (LanguageName::cases() as $case) {
            static::assertNotNull($case->toLanguageAlpha3Bibliographic());
        }
    }

    public function testAllCasesCanBeConvertedToLanguageAlpha3Terminology(): void {
        foreach (LanguageName::cases() as $case) {
            static::assertNotNull($case->toLanguageAlpha3Terminology());
        }
    }

    public function testSomeCasesCanBeConvertedToLanguageAlpha2(): void {
        foreach (LanguageName::cases() as $case) {
            $case->toLanguageAlpha2();
        }
    }
}
