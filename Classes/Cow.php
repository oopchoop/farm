<?php

namespace Classes;

class Cow extends Farm
{
    protected $unit = 'Молоко';
    protected $unitsOfMeasurement = 'л';
    protected $name = 'Коровы';
    protected $minAdditional = '8';
    protected $maxAdditional = '12';
    protected $idPrefix = 'Корова';
}