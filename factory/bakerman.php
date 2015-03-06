<?php

class BakerMan implements AbstractFactory {

	public function createEmployee() {

		return new Employee($name,$surname);
	}
}