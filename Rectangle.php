<?php
include_once ('Resizeable.php');

class Rectangle implements resizeable
{
public $width;
public $height;
public function __construct($width,$height)
{
    $this->width = $width;
    $this->height = $height;
}

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function getArea(){
        return $this->height * $this->width;
    }
    public function getPer(){
        return ($this->width + $this->height) *2;
    }
    public function resize($doublePercent)
    {
        return $this->getArea() * mt_rand(0,100);
    }
}