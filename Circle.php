<?php
include_once ('Resizeable.php');

class Circle implements resizeable

{
public $radius;
public function __construct($radius)
{
    $this->radius= $radius;
}

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function getArea(){
    return ($this->radius * $this->radius) * 3.14;
    }
    public function getPer(){
    return ($this->radius + $this->radius) *3.14;
    }
    public function resize($doublePercent)
    {
 return $this->getArea()* mt_rand(0,100);
    }
}