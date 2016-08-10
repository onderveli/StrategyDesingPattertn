<?php
function __autoload($className) { 
	include_once $className . '.php';
}

//$store = new \Data\Context(new \Data\Drivers\Add());
//$store = new \Data\Context(new \Data\Drivers\Substract());
$store = new \Data\Context(new \Data\Drivers\Multy());

echo $store->executeStrategy(10,10);