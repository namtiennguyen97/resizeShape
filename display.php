<?php
include 'Circle.php';
include "Rectangle.php";
include "Square.php";
$circle = new Circle(10);
$square = new Square(5);
$rectangle = new Rectangle(4,5);
echo "Ban kinh hin tron la: ".$circle->getRadius()."<br>";
echo "Kich co hinh tron ngau nhien la: ".$circle->resize(1)."<br>";
//
echo "<br>";
echo "Chieu dai canh hinh vuong la: ".$square->getWidth()."<br>";
echo "Kich co random cua Hinh vuong la: ".$square->resize(1);
echo "<br>";
echo "Chieu dai hinh chu nhat la: ".$rectangle->getWidth()." va chieu rong la: ".$rectangle->getHeight()."<br>";
echo "Kich co random cua hinh chu nhat la: ".$rectangle->resize(1);