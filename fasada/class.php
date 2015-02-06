<?php 
 
 require_once 'name.php','surname.php';

class PersonTest extends PHPUnit_Framework_TestCase {

    public $test;



    public fuction setUp() {

        $this->test = new Person("Tony","Romanov");

    }

    public fuction testName() {

        $Tony = $this->test->getName();
        $this->assertTrue($Tony == "Tony");
    }

    public fuction testSurname() {

        $Romanov = $this->test->getSurname();
        $this->assertTrue($Romanov == "Romanov");
    }

}



?>