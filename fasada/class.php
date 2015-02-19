<?php 
 
 require_once('./name.php');
 require_once('./surname.php');

class PersonTest extends PHPUnit_Framework_TestCase {

    private 
	$imie;
    private
	$nazwisko;


    public function __construct() {

        $this->imie = new Name();
        $this->nazwisko = new Surname();
    }

    public function getName() {
        return $this->imie->getName();
    }
     
    public function getSurname() {
        return $this->nazwisko->getSurname();
    }

    public function testgetName() {

        $Jarek = $this->getName();
        $this->assertTrue($Jarek == "Jarek");
    }

    public function testgetSurname() {

        $Kotlorz = $this->getSurname();
        $this->assertTrue($Kotlorz == "Kotlorz");
    }

}



?>