<?php

namespace mazaicrafty\aboutmeee\repository;

class PlayerRepository implements Repository{

    private $nickname;
    
    protected function setNickname(string $nickname){
        $this->nickname = $nickname;
    }

    protected function getNickname(): string{
        return $this->nickname;
    }

    private $message;

    protected function setMessage(string $message){
        $this->message = $message;
    }

    protected function getMessage(): string{
        return $this->message;
    }

    private $configs = [];

    protected function setConfigs(array $configs){
        $this->configs = $configs;
    }

    public static function save(){
        
    }
}
