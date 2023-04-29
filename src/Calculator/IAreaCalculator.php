<?php

namespace Geometry\Calculator;

interface IAreaCalculator
{
    public function info(): string;

    public function getSquare(): int|float;
}
