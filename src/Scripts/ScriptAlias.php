<?php
declare(strict_types=1);

namespace PrinsFrank\Standards\Scripts;

use PrinsFrank\Enums\BackedEnum;

/**
 * @standard ISO-15924
 * @source https://www.unicode.org/iso15924/iso15924-codes.html
 */
enum ScriptAlias: string
{
    public function toScriptNumber(): ScriptNumber
    {
        return BackedEnum::fromName(ScriptNumber::class, $this->name);
    }

    public function toScriptName(): ScriptName
    {
        return BackedEnum::fromName(ScriptName::class, $this->name);
    }

    public function toScriptCode(): ScriptCode
    {
        return BackedEnum::fromName(ScriptCode::class, $this->name);
    }
}
