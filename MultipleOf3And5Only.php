<?php

class MultipleOf3And5Only
{
    public function isValid(int $number): bool
    {
        if ($number % 5 === 0 && $number % 3 === 0) {
            return true;
        }

        return false;
    }
}