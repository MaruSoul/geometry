<?php

use League\Container\Container;
use Geometry\Calculator\Shapes\{Circle, Rectangle, Square};

$container = new Container();
$container->add(Circle::class)->addArgument(666)->addTag('shapes');
$container->add(Square::class)->addArgument(666)->addTag('shapes');
$container->add(Rectangle::class)->addArgument(5)->addArgument(5)->addTag('shapes');
