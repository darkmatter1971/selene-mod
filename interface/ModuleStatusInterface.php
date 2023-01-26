<?php

interface ModuleStatusInterface {
    public function getModuleStatus($moduleConfig);
    public function updateModuleStatus($moduleId, $moduleStatus);
}