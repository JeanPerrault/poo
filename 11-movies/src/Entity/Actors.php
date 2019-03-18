<?php

namespace Entity;

/**
 * Cette classe représente un acteur.
 */
class Actors
{
    public $id;
    public $lastname;
    public $firstname;
    public $birthday;

    public function getFullname()
    {
        return $this->firstname.' '.$this->lastname;
    }

    public function getAge()
    {
        return $this->birthday;
    }
}