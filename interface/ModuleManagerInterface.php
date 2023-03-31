<?php

declare(strict_types = 1);

namespace App\Module\Loader;

interface ModuleManagerInterface {
    public function updateModuleConfig($module, $moduleDocs);
}