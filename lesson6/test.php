<?php

function exercise10(int $number)
{
    /*
    Išspausdinkite skaičius, kurie yra mažesni nei $number ir dalijasi iš 3. Jeigu paduotas skaičius mažesnis nei 0,
    funkcija nieko nespausdina.
    Funkcijos kvietimas: exercise10(60)
    Funkcija spausdina:
    3
    6
    9
    12
    ...
    60
    */

    for ($i = 0; $i < $number; $i++){
    if ($i % 3 == 0 || $i < $number) {
        return $i;
    }
         elseif ($number<0){
            echo "blank space";
        }
    }
}
var_dump(exercise10(60));

