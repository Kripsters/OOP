<?php

class Train {

    public function __construct(
        public $brand,
        public $trackGauge,
        public $mileage) {
       }

       public function __destruct() {
        echo $this->brand . " is dead at mileage " . $this->mileage."<br>";
    }

    public function increaseMileage($var) {
        $this->mileage = $this->mileage+$var;
       }
    
       static function makeNoise() {
        echo "Choo, Choo! <br>";
    }
}