<?php 
 include 'name.php';
 include 'surname.php';
 include 'secondname.php';


class Person
{
    private $name;
    private $surname;
    private $secondname; 

    public function __construct($name,$secondname,$surname) 
    {

        $this->name = new Name($name);
        $this->secondname = new SecondName($secondname);
        $this->surname = new Surname($surname);
    }   

    public function getName() 
    {
        return $this->name->getName();
    }

    public function getSecondName() 
    {
        return $this->secondname->getSecondName();
    }
     
    public function getSurname() 
    {
        return $this->surname->getSurname();
    }

}
