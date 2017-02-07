<?php

class Numbers
{
    protected $numbers = [];

    public function printNumbers()
    {
        $this->setNumbers();

        foreach($this->numbers as $number) {
            $number = $number->__toInt();

            echo $this->getValueToPrint($number);
        }
    }

    protected function setNumbers()
    {
        for ($randomNumber = 1; $randomNumber < 101; $randomNumber++) {
            $this->numbers[] = new Number($randomNumber);
        }
    }

    protected function getValueToPrint(int $number): string
    {
        $multipleOf3Only = new MultipleOf3Only();
        if ($multipleOf3Only->isValid($number)) {
            return "Fizz,";
        }

        $multipleOf5Only = new MultipleOf5Only();
        if ($multipleOf5Only->isValid($number)) {
            return "Buzz,";
        }

        $multipleOf3And5Only = new MultipleOf3And5Only();
        if ($multipleOf3And5Only->isValid($number)) {
            return "FizzBuzz,";
        }

        return $number . ",";
    }
}