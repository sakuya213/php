<?php    
require_once('./class.php');


class PersonTest extends PHPUnit_Framework_TestCase 
{ 
	private $name;
	private $surname;

	public function __construct()
	{
	$this->name = new Person('Stefan');
	$this->surname = new Person('Batory')
	}

    public function testGetName() {

        $Jarek = $this->name->getName();
        $this->assertEquals("Stefan",$Jarek);
    }

    public function testGetSurname() {

    	$Kotlorz = $this->surname->getSurname();
    	$this->assertEquals("Batory",$Kotlorz)
    }

  
}