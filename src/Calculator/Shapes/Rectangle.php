<?php

namespace Geometry\Calculator\Shapes;

use Geometry\Calculator\AreaCalculator;

class Rectangle extends AreaCalculator
{
    const SHAPE = 'Rectangle';

    public function __construct(protected int | float $a, protected int | float $b)
    {
    }

    public function getSide(): array
    {
        return [
            'a' => $this->a,
            'b' => $this->b,
        ];
    }

    public function getSquare(): int|float
    {
        return $this->a * $this->b;
    }

    public function getPerimeter(): int|float
    {
        return 2 * ($this->a + $this->b);
    }
}
