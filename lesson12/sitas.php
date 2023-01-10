<?php

//$pattern = '/PN#\d+/';
//$correctOrderNumber = 'PN#a123';
//$matches = [];
//
//$result = preg_match($pattern, $correctOrderNumber, $matches);
//var_dump($result, $matches);



//1. Parašykite funkciją, kuri pašalintų paskutinį žodį iš stringo
//"A car is standing in a parkinglot." --> "A car is standing in a"
$sentence = "A car is standing in a bedroom.";
function madeMyDay(string $sentence):string {
    $pattern = '/\w+\./';
    $changes = '';
    return preg_replace($pattern, $changes, $sentence );
}
echo madeMyDay($sentence);

