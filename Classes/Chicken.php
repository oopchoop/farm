<?php

namespace Classes;

class Chicken extends Farm
{
    protected $unit = 'Яйца';
    protected $unitsOfMeasurement = 'шт';
    protected $name = 'Курицы';
    protected $minAdditional = '0';
    protected $maxAdditional = '1';
    protected $idPrefix = 'Курица';
}