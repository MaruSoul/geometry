<?php

use Geometry\Calculator\IAreaCalculator;
use Geometry\Calculator\Shapes\{Circle, Square, Rectangle};

require_once(__DIR__ . '/../vendor/autoload.php');

$shapes = [
    new Circle(666),
    new Square(5),
    new Rectangle(3, 5),
];

function showInfo(IAreaCalculator $shape): void
{
    echo $shape->info();
    echo PHP_EOL;
}

foreach ($shapes as $shape) {
    showInfo($shape);
}
