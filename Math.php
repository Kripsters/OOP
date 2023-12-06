<?php

class Math {

    static function addTwo($x, $y) {
        echo "<br>" . $x+$y;
    }

    static function factorial($x) {
        $y=$x;
        $x=1;
        for ($i=$y; $i>=1; $i--) {
            $x=$x*$i;
        }
        echo "<br>" . $x;
    }

    static function sum($x) {
        echo "<br>";
        $sum=0;
        foreach ($x as $y) {
            $sum = $sum+$y;
        }
        echo $sum;
    }

    static function average($x) {
        echo "<br>";
        $sum=0;
        $count=0;
        foreach ($x as $y) {
            $sum = $sum+$y;
            $count++;
        }
        echo $sum/$count;
    }

    
    static function max($x) {
        echo "<br>";
        $max=0;
        foreach ($x as $y) {
            if ($y>$max) {
                $max=$y;
            }
        }
        echo $max;
    }
}