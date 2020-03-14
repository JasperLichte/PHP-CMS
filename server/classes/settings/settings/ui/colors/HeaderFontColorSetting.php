<?php

namespace settings\settings\ui\colors;

class HeaderFontColorSetting extends ColorSetting
{

    public static function dbKey(): string
    {
        return 'HEADER_FONT_COLOR';
    }

    public function cssProperty(): string
    {
        return '--header-font-color';
    }

    public function description(): string
    {
        return 'Header font color';
    }

    public function getDefaultValue(): string
    {
        return '#eeeeee';
    }
}
