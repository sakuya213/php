<?php 
 
 require_once 'name.php','surname.php';

class PersonTest extends PHPUnit_Framework_TestCase {

    private $objects = array();



    public function construct() {

        $this->objects[0] = new name();
        $this->objects[1] = new surname();
    }

    public function getName() {
        $this->objects[0]->method();
    }
     
    public function getSurname() {
        $this->objects[1]->method();
    }

    public function testgetName() {

        $Jarek = $this->test->getName();
        $this->assertTrue($Jarek == "Jarek");
    }

    public function testgetSurname() {

        $Kotlorz = $this->test->getSurname();
        $this->assertTrue($Kotlorz == "Kotlorz");
    }

}



?>