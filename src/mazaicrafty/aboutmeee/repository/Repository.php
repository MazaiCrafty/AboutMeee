<?php

namespace mazaicrafty\aboutmeee\repository;

interface Repositoty{

    public function setNickname(string $name);
    public function getNickname(): string;

    public function setMessage(string $message);
    public function getMessage(): string;
}
