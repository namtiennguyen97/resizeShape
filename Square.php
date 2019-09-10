<?php

include_once ('Resizeable.php');
class Square implements resizeable
{
public $width;
public function __construct($width)
{
    $this->width = $width;
}

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function getArea(){
        return $this->width *$this->width;
    }
    public function getPer(){
        return $this->width *4;
    }
    public function resize($doublePercent)
    {
       return $this->getPer() * mt_rand(0,100);
    }

}