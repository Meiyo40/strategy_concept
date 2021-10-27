<?php

require_once ("Building.php");
require_once ("House.php");
require_once ("Tower.php");
require_once ("School.php");


$building = new Building("Tower");
echo $building->createBuilding();
echo "\n";

$building = new Building("School");
echo $building->createBuilding();
echo "\n";

$building = new Building("House");
echo $building->createBuilding();
echo "\n";
