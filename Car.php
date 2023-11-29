<?php

class Car {
   public $brand;
   private $mileage;
   static $describe = "I have 4 wheels, but sometimes 3 <br>";

   public function __construct($cBrand, $cMileage) {
    $this->brand = $cBrand;
    $this->mileage = $cMileage;
   }

   public function __destruct() {
       echo $this->brand . " is dead at mileage " . $this->mileage."<br>";
   }

   public function increaseMileage($var) {
    $this->mileage = $this->mileage+$var;
   }

   static function makeNoise() {
       echo "Beep, Beep! <br>";
   }
}