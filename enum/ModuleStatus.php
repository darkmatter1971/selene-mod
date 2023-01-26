<?php

declare(strict_types=1);

namespace App\Enum\ModuleStatus;

enum ModuleStatus: int {
    case ENABLE  = 1;
    case DISABLE = 0;
}