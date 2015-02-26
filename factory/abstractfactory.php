<?php
include 'employee.php';

interface AbstractFactory {

	function createEmployee();
}

class PoliceMan implements AbstractFactory {

	public function createEmployee() {

		return new Employee($name,$surname);
	}
}

class BakerMan implements AbstractFactory {

	public function createEmployee() {

		return new Employee($name,$surname);
	}
}