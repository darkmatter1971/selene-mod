<?php

declare(strict_types=1);

namespace App\Module\Loader\Interface;

interface DirectoryHandlerInterface {
    public function getModuleList($moduleDir);
}