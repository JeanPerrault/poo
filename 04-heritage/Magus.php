<?php

class Magus extends Character
{
    public function __construct($name)
    {
        parent::__construct($name);
        $this->mana *= 2;
    }
}
