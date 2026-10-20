<?php
//Part G — Small Independent Exercise
//Parent Class: Vehicle
class Vehicle{
    protected $brand;
    function __construct($brand){
        $this->brand=$brand;
    }
    function start(){
        echo "The vehicle is starting.<br>";
    }
}
//Child Class: Car
class Car extends Vehicle{
    function showBrand(){
        echo "Car brand:$this->brand";
    }
}
//Create an Object
$car1=new Car("Toyota");
//calling the start method
$car1->start();
$car1->showBrand();


?>