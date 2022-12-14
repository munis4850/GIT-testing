<?php
declare(strict_types=1);

/*
   Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
   */
$numbers = [
    [0, 1],
    [1, 0, 2],
    [
        0,
        [
            0, 1, 99
        ],
    ],
];
var_dump($numbers[2][1][2]);