<?php

class Number
{
    protected $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function __toInt(): int
    {
        return $this->value;
    }
}