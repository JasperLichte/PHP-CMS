<?php

namespace settings\settings;

use settings\categories\SettingsCategory;
use settings\categories\UiSettingCategory;
use settings\types\options\BooleanSetting;
use settings\validator\BooleanValidator;
use settings\validator\Validator;

class ShowHeaderSetting extends BooleanSetting
{

    public function getDefaultValue(): string
    {
        return 'yes';
    }

    public function getCategory(): SettingsCategory
    {
        return new UiSettingCategory();
    }

    public static function dbKey(): string
    {
        return 'SHOW_HEADER';
    }

    public function description(): string
    {
        return 'Header visible';
    }

    public function getValidator(): Validator
    {
        return new BooleanValidator();
    }

}
