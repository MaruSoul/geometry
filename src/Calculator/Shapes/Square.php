<?php

namespace Geometry\Calculator\Shapes;

use Geometry\Calculator\AreaCalculator;

class Square extends AreaCalculator
{
    const SHAPE = 'Rectangle';

    public function __construct(protected int | float $side)
    {
    }

    public function getSide(): float|int
    {
        return $this->side;
    }

    public function getSquare(): int|float
    {
        return pow($this->side, 2);
    }

    public function getPerimeter(): int|float
    {
        return 4 * $this->side;
    }
}
