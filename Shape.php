<?php
include 'Circle.php';
include "Square.php";
include 'Rectangle.php';
$shape[0]= new Circle(2);
$shape[1]= new Rectangle(2,5);
$shape[2]= new Square(5);

//hien thi hinh tron
foreach ($shape as $value){
    if ($value instanceof Circle) {
        echo 'Hinh tron la: ' . $value->resize(1)."<br>";
    } elseif ($value instanceof Rectangle){
        echo 'Hinh chu nhat la:'.$value->resize(1)."<br>";
    } elseif ($value instanceof Square){
        echo 'Hinh vuong la: '.$value->resize(1);
    }
}