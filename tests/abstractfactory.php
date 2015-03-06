<?php
include 'employee.php';
include 'policeman.php';
include 'bakerman.php';

interface AbstractFactory {

	function createEmployee();
}



