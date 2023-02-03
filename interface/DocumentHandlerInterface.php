<?php

declare(strict_types=1);

namespace App\Module\Loader\Interface;

interface DocumentHandlerInterface {
    public function parseModuleDocs($module);
}