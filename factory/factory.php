<?php 
 include 'employee.php';
 include 'abstractfactory.php';


class Factory
{
    const FACTORY1='FACTORY 1';
    const FACTORY2='FACTORY 2';

    public static function chooseFactory($name,$surname) {

        switch($name,$surname) {
            case self::FACTORY1:
                return new PoliceMan();
                break;
            case self::FACTORY2:
                return new BakerMan();
                break; 

        }
    }
}