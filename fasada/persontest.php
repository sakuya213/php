<?php    
require_once('./class.php');


class PersonTest extends PHPUnit_Framework_TestCase 
{ 
	private $person;

	public function __construct()
	{
	$this->person = new Person('Stefan','Batory');
	}

    public function testGetName() {

        $Jarek = $this->person->getName();
        $this->assertEquals("Stefan",$Jarek);
    }

    public function testGetSurname() {

    	$Kotlorz = $this->person->getSurname();
    	$this->assertEquals("Batory",$Kotlorz)
    }

  
}
