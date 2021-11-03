<?php

// Parent - Vehicle
class Vehicle{
   
    public function __construct()
    {
        echo "initiated<br>";
       
    }

    protected function hello(){
        return "main Hello<br>";
    }

}

class Car extends Vehicle{

    public function __construct()
    {
        echo "initiated sub<br>";
       
    }

    public function message(){
        return $this->hello();
    }

}

$cars = new Car();
echo $cars->message();


