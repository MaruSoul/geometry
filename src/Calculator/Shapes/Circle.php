<?php

namespace Geometry\Calculator\Shapes;

use Geometry\Calculator\IAreaCalculator;

class Circle implements IAreaCalculator
{
    const SHAPE = 'Circle';

    public function __construct(protected int | float $radius)
    {
    }

    public function getRadius(): float|int
    {
        return $this->radius;
    }

    public function info(): string
    {
        return 'I am ' . self::SHAPE . '. My square is '
            . $this->getSquare() . '. My circle length is ' . $this->getCircleLength() . '.';
    }

    public function getSquare(): int|float
    {
        return M_PI * pow($this->radius, 2);
    }

    public function getCircleLength(): int|float
    {
        return 2 * M_PI * $this->radius;
    }
}
