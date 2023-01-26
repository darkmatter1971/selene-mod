<?php

interface DataHandlerInterface {
    public function readModuleConfigs();
    public function writeModuleConfigs($data);
}