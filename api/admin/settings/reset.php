<?php

require_once(__DIR__ . '/../../../server/base.php');

echo (new \api\actions\admin\settings\ResetSettingAction())();
