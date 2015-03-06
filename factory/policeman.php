<?php

class PoliceMan implements AbstractFactory {

	public function createEmployee() 
	{

		return new Employee($name,$surname);
	}
}