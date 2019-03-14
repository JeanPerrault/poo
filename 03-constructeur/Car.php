<?php

class Car{

    private $color;
    private $brand;
    private $model;
    private $wheel;

    
        public function __construct($brand, $model, $wheel) 
        {
            $this->brand = $brand;
            $this->model = $model;
            $this->wheel = $wheel;
        }
        public function setColor($color) 
        {
            $this->color = $color;
            return $this;
        }
        public function drive()
        {
            return 'La '.$this->brand .' '.$this->model. ' roule sur ses '.$this->wheel. ' roues. ';
        }
        public function klaxon()
        {
            return 'La voiture '.$this->color .' klaxonne.';
        }
}

class Moto{

    private $color;
    private $brand;
    private $model;
    private $wheel;

    
        public function __construct($brand, $model, $wheel) 
        {
            $this->brand = $brand;
            $this->model = $model;
            $this->wheel = $wheel;
        }
    
        public function setColor($color) 
        {
            $this->color = $color;
            return $this;
        }
        public function drive()
        {
            return 'La '.$this->brand .' '.$this->model. ' roule sur ses '.$this->wheel. ' roues. ';
        }
        public function klaxon()
        {
            return 'La moto '.$this->color .' fait du bruit.';
        }
}