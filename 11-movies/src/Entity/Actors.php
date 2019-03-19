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

    public function getAge($date)
    {
        return (int) ((time() - strtotime($date)) / 3600 / 24 / 365);
    }
}


