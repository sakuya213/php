<?php

class Surname 
{
	private $surname;

	public function getSurname() {

		return $this->surname;

	}

	public function setSurname($surname) {

		$this->surname = $surname;
	}

	public function __construct($surname) {

		$this->setSurname($surname);
	}
}
