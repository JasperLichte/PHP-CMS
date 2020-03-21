<?php

namespace settings\settings\ui\colors;

use settings\categories\ColorSettingCategory;
use settings\categories\SettingsCategory;
use settings\settings\ui\UiSetting;
use settings\validator\ColorValidator;
use settings\validator\Validator;

abstract class ColorSetting extends UiSetting
{

    /** @var SettingsCategory */
    private $category;

    public function __construct()
    {
        parent::__construct();

        $this->category = new ColorSettingCategory();
    }

    public function getValidator(): Validator
    {
        return new ColorValidator();
    }

    public function getCategory(): SettingsCategory
    {
        return $this->category;
    }

}
