<?php
include_once "autoload.php";


$singleton = Singleton::getInstance();
$singleton->setDB();
//$singleton->addNewItem();
$result = $singleton->testQuery();
$singleton->showResult($result);

/*$factory = new TankFactory();
$Tank = new NewTank();
$factory->AddNewType($Tank);
$factory->printType();
$factory->createNewTank();*/

