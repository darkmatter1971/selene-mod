<?php

declare(strict_types = 1);

namespace App\Enum\Module;

enum ModuleStatus: int {
    case ENABLE  = 1;
    case DISABLE = 0;
}