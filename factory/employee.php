<?php
include 'name.php';
include 'surname.php';

interface AbstractEmployee {

	function createEmployee();
}

class Employee implements AbstractEmployee {

private $name;
private $surname;
	 
	public function __construct($name,$surname){

		$this->name = new Name($name);
		$this->surname = new Surname($surname);
	}

	public function getName() {

		return $this->name->getName();
	}

	public function getSurname() {

		return $this->surname->getSurname();
	}


	
}
