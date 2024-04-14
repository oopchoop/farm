<?php

namespace Classes;

class Farm
{
    protected $unit;
    protected $unitsOfMeasurement;
    protected $name;
    protected $productsCount = 0;
    protected $animalCount = 0;
    protected $animalIdArray = [];
    protected $minAdditional;
    protected $maxAdditional;
    protected $idPrefix;

    public function productCounting(): string
    {
        return "{$this->unit} - {$this->productsCount} {$this->unitsOfMeasurement}";
    }

    public function productCollection(): void
    {
        for($i = 0; $i < $this->animalCount; $i++) {
            $randValue = mt_rand($this->minAdditional, $this->maxAdditional);

            $this->productsCount += $randValue;
        }
    }

    public function getAnimalsCount(): int
    {
        return $this->animalCount;
    }

    public function getStatistic(): string
    {
        return "{$this->name} - {$this->getAnimalsCount()}";
    }

    public function addAnimals($count = 1): void
    {
        if($count > 0) {
            for($i = 1; $i <= $count; $i++) {
                $id = $this->animalCount + $i;

                $this->animalIdArray[] = "{$this->idPrefix}{$id}";
            }

            $this->animalCount += $count;
        }
    }

    /*
     * Метод был добавлен для тестов (решил оставить)
     */
    public function getId(): array
    {
        return $this->animalIdArray;
    }
}