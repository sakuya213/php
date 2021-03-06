<?php

class Config 
{

    private static $instance;

    private $config = array(
        "name"     =>  "myname",
        "surname"  =>  "mysurname",
        "old"  =>  "myold"
        );
 
    private function __construct() {}
    private function __clone() {}
 
    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new Config();
        }
        return self::$instance;
    }
    public function setName($name) {
        $this->config["name"] = $name;
    }
    public function getName() {
        return $this->config["name"];
    }
}
 
