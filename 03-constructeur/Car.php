<?php

class Car{

    private $color;
    private $brand;
    private $model;
    private $roue;

    
        public function __construct($brand, $model, $roue) 
        {
            $this->brand = $brand;
            $this->model = $model;
            $this->roue = $roue;
        }
        public function setColor($color) 
        {
            $this->color = $color;
            return $this;
        }
        function drive()
        {
            return 'La '.$this->brand .' '.$this->model. ' roule sur ses '.$this->roue. ' roues. ';
        }
        function klaxon()
        {
            return 'La voiture '.$this->color .' klaxonne.';
        }
}

class Moto{

    private $color;
    private $brand;
    private $model;
    private $roue;

    
        public function __construct($brand, $model, $roue) 
        {
            $this->brand = $brand;
            $this->model = $model;
            $this->roue = $roue;
        }
    
        public function setColor($color) 
        {
            $this->color = $color;
            return $this;
        }
        function drive()
        {
            return 'La '.$this->brand .' '.$this->model. ' roule sur ses '.$this->roue. ' roues. ';
        }
        function klaxon()
        {
            return 'La moto '.$this->color .' fait du bruit.';
        }
}