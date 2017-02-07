<?php

class MultipleOf3Only
{
    public function isValid(int $number): bool
    {
        if ($number % 3 === 0 && $number % 5 != 0) {
            return true;
        }

        return false;
    }
}
