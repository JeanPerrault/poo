<?php

class Rectangle
{
    protected $largeur;
    protected $longueur;

    public function __construct($longueur,$largeur)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function area()
    {
        return $this->longueur*$this->largeur;
    }

    public function perimeter()
    {
        return ($this->longueur+$this->largeur)*2;
    }

}