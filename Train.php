<?php

include_once "Vehicle.php";

class Train extends Vehicle{
    public $trackGuage;
    public function __construct(   
        $brand,
        $mileage,
        $trackGuage) {
            $this->brand=$brand;
            $this->mileage=$mileage;
            $this->trackGuage=$trackGuage;
        }
   
       static function makeNoise() {
        echo "Choo, Choo! <br>";
    }
}