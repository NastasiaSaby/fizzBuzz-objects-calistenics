<?php

use PHPUnit\Framework\TestCase;

include('FizzBuzz.php');

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldGetAListOf100NumbersWithCorrectFizzBuzz()
    {
        $expectedResult = [
            1,2,'Fizz',4,'Buzz','Fizz',7,8,'Fizz','Buzz',11,'Fizz',13,14, 'FizzBuzz'
        ];
        $fizzBuzz = new FizzBuzz();
        ob_start();
        $fizzBuzz->printNumbers();
        $out = ob_get_contents();

        ob_end_clean();

        $out = str_replace(' \n', '', $out);
        $outInArray = explode(',', $out);
        $outReducedTo15FirstElements = array_slice($outInArray, -101, 15);

        $this->assertEquals($outReducedTo15FirstElements, $expectedResult);
    }
}