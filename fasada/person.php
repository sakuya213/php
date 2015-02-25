<?php 
 
 require_once('./name.php');
 require_once('./surname.php');

class Person
{
    private 
        $name;
    private 
        $surname;

    public function __construct($name,$surname) {

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
