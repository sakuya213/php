<?php    
include 'factory.php';



class FactoryTest extends PHPUnit_Framework_TestCase 
{ 
	private $employee;

	public function __construct() {

	$this->employee = new PoliceMan('Stefan','Batory');
	
    }

    public function testChooseFactory() {

        $factory1=Factory::chooseFactory("Factory 1");
        $PoliceMan=$factory1->createEmployee();
    }

  
}