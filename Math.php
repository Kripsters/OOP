<?php

class Math {

    static function addTwo($x, $y) {
        return "<br>" . $x+$y;
    }

    static function factorial($x) {
        $y=$x;
        $x=1;
        for ($i=$y; $i>=1; $i--) {
            $x=$x*$i;
        }
        return "<br>" . $x;
    }

    static function sum($x) {
        $sum=0;
        foreach ($x as $y) {
            $sum = $sum+$y;
        }
        return "<br>" . $sum;
    }

    static function average($x) {
        $sum=0;
        $count=0;
        foreach ($x as $y) {
            $sum = $sum+$y;
            $count++;
        }
        return "<br>" . $sum/$count;
    }

    
    static function max($x) {
        $max=0;
        foreach ($x as $y) {
            if ($y>$max) {
                $max=$y;
            }
        }
        return "<br>" . $max;
    }
}