<?php
require_once 'Classes/Farm.php';
require_once 'Classes/Cow.php';
require_once 'Classes/Chicken.php';

use Classes\Cow;
use Classes\Chicken;

$cow = new Cow();
$chicken = new Chicken();

$cow->addAnimals(10);
$chicken->addAnimals(20);

echo "{$cow->getStatistic()}, {$chicken->getStatistic()}\n";

for($i = 0; $i < 7; $i++) {
    $cow->productCollection();
    $chicken->productCollection();
}

echo "{$cow->productCounting()}, {$chicken->productCounting()}\n";

$chicken->addAnimals(5);
$cow->addAnimals();

echo "{$cow->getStatistic()}, {$chicken->getStatistic()}\n";

for($i = 0; $i < 7; $i++) {
    $cow->productCollection();
    $chicken->productCollection();
}

echo "{$cow->productCounting()}, {$chicken->productCounting()}\n";