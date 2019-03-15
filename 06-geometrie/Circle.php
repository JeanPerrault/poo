<?php

class Circle
{
    protected $rayon;
        
    public function __construct($rayon)
    {
        $this->rayon = $rayon;
    }

    public function area()
    {
        return round(M_PI*$this->rayon**2,2);
    }

    public function perimeter()
    {
        return round(M_PI*$this->rayon*2,2);

    }
}