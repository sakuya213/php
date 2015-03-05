<?php
include 'config.php';

class ConfigTest extends PHPUnit_Framework_TestCase 
{

	private $conf1;
	private $conf2;


	public function testGetInstance() 
	{

	$conf1 = Config::getInstance();

	echo $conf1->getName(); // show "myname"

	$conf2 = Config::getName();
	$conf2->setName("Jarek");

	echo $conf1->getLanguage(); // show "Jarek"

	}
}
