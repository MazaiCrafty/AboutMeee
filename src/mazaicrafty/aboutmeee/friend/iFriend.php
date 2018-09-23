<?php

namespace mazaicrafty\aboutmeee\friend;

use pocketmine\Player;

interface iFriend{

    public function register(Player $sender, Player $target);
    public function accept(Player $sender);
    public function refuse(Player $sender);
}