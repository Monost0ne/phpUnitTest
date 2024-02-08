<?php

namespace App;

class Calculator
{
    public function sum(int $firstValue, int $secondValue ): int 
    {
        return $firstValue + $secondValue;
    }

    public function multiplication(int $firstValue, int $secondValue ): int
    {
        return $firstValue * $secondValue;
    }

    function isEven(int $n): bool
    {
        if ($n%2 === 0)
            return true;
        return false;
    }
}