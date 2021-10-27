<?php

require_once ("BuildingStrategy.php");


class Building
{
    private $buildingStragegy;

    public function __construct($type)
    {
        $this->buildingStragegy = $type;
    }

    public function createBuilding()
    {
        $strategy = new $this->buildingStragegy();
        return $strategy->build();
    }

    /**
     * @param BuildingStrategy $buildingStragegy
     */
    public function setBuildingStragegy($buildingStragegy): void
    {
        $this->buildingStragegy = $buildingStragegy;
    }


}