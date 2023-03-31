<?php

declare(strict_types = 1);

namespace App\Module\Loader;

const BASE_URI = __DIR__ . DIRECTORY_SEPARATOR;

require_once BASE_URI . '..' . DIRECTORY_SEPARATOR . 'interface' . 'ModuleManagerInterface';

class ModuleManager implements ModuleManagerInterface
{
    public function updateModuleConfig($module, $moduleDocs)
    {

    }
}