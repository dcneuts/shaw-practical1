<?php
/**
 * Created by PhpStorm.
 * User: Derek
 * Date: 4/29/2017
 * Time: 10:59 AM
 * PHP Class Demo
 */

class Person {
    protected $name;
    protected $dateOfBirth;

    public function __construct($name,$dateOfBirth) {
        $this->name = $name;
        $this->dateOfBirth = $dateOfBirth;
    }
    public function __get($prop) {
        if($prop=="age") {
            $age = (new DateTime())->diff($this->dateOfBirth);
            return $age->y;
        }
        return $this->$prop;
    }
    public function __set($prop,$value) {
        $this->$prop = $value;
    }
}
$person = new Person("Ben", new DateTime("1985-12-21"));
echo $person->age;