<?php

namespace TStark\PluginName;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {
    
    public function onEnable(): void {
        $this->getLogger()->info("PluginName habilitado!");
    }
    
    public function onDisable(): void {
        $this->getLogger()->info("PluginName deshabilitado!");
    }
}