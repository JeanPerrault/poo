<?php

class Car{

    private $color;
    private $brand;
    private $model;


    
        public function __construct($brand, $model) 
        {
            $this->brand = $brand;
            $this->model = $model;
        }
        public function setColor($color) 
        {
            $this->color = $color;
        }
        function drive()
        {
            return 'La '.$this->brand .' '.$this->model. ' roule sur ses 4 roues. ';
        }
        function klaxon()
        {
            return 'La voiture '.$this->color .' klaxonne.';
        }
}