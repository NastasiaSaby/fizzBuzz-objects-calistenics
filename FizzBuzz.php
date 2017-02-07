<?php

include ('Number.php');
include ('Numbers.php');
include('MultipleOf3Only.php');
include('MultipleOf5Only.php');
include('MultipleOf3And5Only.php');

class FizzBuzz
{
    public function printNumbers() {
        $numbers = new Numbers();
        $numbers->printNumbers();
    }
}