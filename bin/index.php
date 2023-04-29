<?php

use Geometry\Calculator\IAreaCalculator;
use Geometry\Calculator\Shapes\{Circle, Square, Rectangle};

require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../src/container.php');

$shapes = $container->get('shapes');

function showInfo(IAreaCalculator $shape): void
{
    echo $shape->info();
    echo PHP_EOL;
}

foreach ($shapes as $shape) {
    showInfo($shape);
}
