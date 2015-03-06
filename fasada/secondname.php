<?php

class SecondName 
{

private $secondname;

	public function getSecondName()
	{

		return $this->secondname;

	}

	public function setSecondName($secondname)
	{


		$this->secondname = $secondname;

	}

	public function __construct($secondname)
	{

		$this->setSecondName($secondname);
	}
}
