<?php 
 
class Element1{
    public function method() {
        echo "name: Jarek <br>";
    }
}
 
class Element2{
    public function method() {
        echo "surname: Kotlorz <br>";
    }
}
 
class Element3{
    public function method() {
        echo "sex: male";
    }
}
 
class Name{
    private $objects = array();
     
    public function __construct() {
        $this->objects[0] = new Element1();
        $this->objects[1] = new Element2();
        $this->objects[2] = new Element3();
    }
     
    public function method1() {
        $this->objects[0]->method();
    }
     
    public function method2() {
        $this->objects[1]->method();
    }
     
    public function method3() {
        $this->objects[2]->method();
    }
     
    public function apiElement1() {
        return $this->objects[0];
    }
}
 
// tests
$api = new Name();
$api->method1(); // displays "name: Jarek"
$api->method2(); // displays "surname: Kotlorz"
$api->method3(); // displays "sex: male"
 
?>