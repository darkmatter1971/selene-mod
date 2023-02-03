<?php

declare(strict_types=1);

namespace App\Module\Loader\Interface;

interface ModuleLoaderInterface {
    public function loadModule($moduleUpdater);
}