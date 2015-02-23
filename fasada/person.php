<?php 
 
 require_once('./name.php');
 require_once('./surname.php');

class Person
{
    private 
        $name;
    private 
        $surname;

    public function __construct($name) {

        $this->name = new Name($name);
        $this->surname = new Surname();
    }   

    public function getName() {
        return $this->name->getName();
    }
     
    public function getSurname() {
        return $this->surname->getSurname();
    }

}
