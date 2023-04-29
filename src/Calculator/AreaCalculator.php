<?php

namespace Geometry\Calculator;

abstract class AreaCalculator implements IAreaCalculator
{
    const SHAPE = 'Shape';

    public function info(): string
    {
        return 'I am ' . static::SHAPE . '. My square is '
            . static::getSquare() . '. My Perimeter is ' . static::getPerimeter() . '.';

    }

    abstract public function getPerimeter(): int|float;
}
