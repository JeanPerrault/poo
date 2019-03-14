<?php

class Cat
{
    var $name;
    var $type;
    var $fur;

    function cry()
    {
        return 'miaou';
    }
    
    function eat()
    {
        return $this->name . ' mange.';
    }
    
}
