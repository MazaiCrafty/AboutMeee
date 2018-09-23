<?php

namespace mazaicrafty\aboutmeee;

use pocketmine\utils\Config;

class ConfigManager{

    private static $configs = [];

    public static function register(array $configs){
        foreach ($configs as $name => $config){
            self::$configs[$name] = $config;
        }
    }

    public static function get(string $name): ?Config{
        return self::$configs[$name] ?? null;
    }
}
