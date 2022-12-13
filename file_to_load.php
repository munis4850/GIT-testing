<?php
declare(strict_types=1);

/*
1. Parašykite funkciją 'dividesBy5', kuri priimtų int tipo skaičių ir grąžintų jo dalybos iš 5 liekaną.
*/

function dividesBy5 (int $firstNumber, int $secondNumber ): int
{
    return ($firstNumber % $secondNumber);
}
var_dump(dividesBy5(7,2));