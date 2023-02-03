<?php

declare(strict_types=1);

namespace App\Module\Loader\Interface;

interface ModuleStatusInterface {
    public function getModuleStatus($moduleConfig);
    public function updateModuleStatus($moduleId, $moduleStatus);
}