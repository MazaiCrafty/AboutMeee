<?php

namespace mazaicrafty\aboutmeee\friend;

use pocketmine\Player;

use mazaicrafty\aboutmeee\ConfigManager;

class Friend implements iFriend{

    public function register(Player $sender, Player $target){
        $list = ConfigManager::get("friendlist");
        $list->set($sender->getName(), [$target->getName()]);
    }

    public function accept(Player $sender)
}
