<?php    
include 'class.php';


class PersonTest extends PHPUnit_Framework_TestCase 
{ 
	private $person;

	public function __construct()
	{

	$this->person = new Person('Stefan','Albert','Batory');

	}

    public function testGetName() 
    {

        $Jarek = $this->person->getName();
        $this->assertEquals("Stefan",$Jarek);
    }

    public function testGetSecondName() 
    {

        $Mirek = $this->person->getSecondName();
        $this->assertEquals("Albert",$Mirek);
    }

    public function testGetSurname() 
    {

    	$Kotlorz = $this->person->getSurname();
        $this->assertEquals("Batory",$Kotlorz);

    }

  
}
