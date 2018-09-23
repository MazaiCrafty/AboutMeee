<?php

namespace mazaicrafty\aboutmeee;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;

use pocketmine\utils\Config;

class Main extends PluginBase{

    protected function onEnable(): void{
        ConfigManager::register([
            "Test" => new Config($this->getDataFolder() . "Test.yml", Config::YAML),
        ]);
    }
}
