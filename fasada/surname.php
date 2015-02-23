<?php

class Surname 
{
	private $surname;

	public function getSurname() {

		return $this->surname;
	}

	public function setSurname() {

		$this->surname = $surname;
	}

	public function __construct($surname) {

		$this->setSurname($surname);
	}
}
