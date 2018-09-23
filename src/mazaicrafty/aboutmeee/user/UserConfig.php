<?php

namespace mazaicrafty\aboutmeee\user;

use mazaicrafty\aboutmeee\repository\PlayerRepository;

class UserConfig extends PlayerRepository implements User{

    public function __construct(string $nickname, string $message, array $configs){
        parent::setNickname($nickname);
        parent::setMessage($message);
        parent::setConfigs($configs);
    }
}
