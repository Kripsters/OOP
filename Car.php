<?php

include_once "Vehicle.php";

class Car extends Vehicle {
    static $describe = "aa <br>";

   public function __construct(   
   $brand,
   $mileage) {
       $this->brand=$brand;
       $this->mileage=$mileage;
   }

   static function makeNoise() {
       echo "Beep, Beep! <br>";
   }
}