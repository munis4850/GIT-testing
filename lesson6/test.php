<?php

function exercise9(int $start, int $end): void
{
    /*
    Išspausdinkite skaičius nuo $start iki $end pasinaudodami ciklu.
    Jeigu $start yra mažiau nei $end, funkcija nieko nespausdina.
    */
    for ($i = $start; $i >= $end; $i--) {
        if (!$start < $end) {
            echo $i. " ";
        }
        else {
            echo "";
        }
    }
}
exercise9(11, 2);