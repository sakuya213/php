<?php
include 'config.php';

class ConfigTest extends PHPUnit_Framework_TestCase 
{

private $config;


public function testGetInstance() 
{

	$config = Config::getInstance();


	public function testSetName($name) 
	{

		$this->Config["Jarek"] = $name

	}

	public function testGetName() 
	{

		$Jarek = $this->$name->getName();
        $this->assertEquals("Jarek",$Jarek);

	}

}
}
