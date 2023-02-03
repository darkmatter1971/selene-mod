<?php

declare(strict_types=1);

namespace App\Module\Loader\Interface;

interface DataHandlerInterface {
    public function readModuleConfigs();
    public function writeModuleConfigs($data);
}