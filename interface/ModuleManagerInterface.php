<?php

declare(strict_types=1);

namespace App\Module\Loader\Interface;

interface ModuleManagerInterface {
    public function updateModuleConfig($module, $moduleDocs);
}