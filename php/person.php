<?php
/**
 * Created by PhpStorm.
 * User: Derek
 * Date: 4/29/2017
 * Time: 10:59 AM
 * PHP Class Demo
 */

class Person
{
    protected $name = "Julian";
    protected $dateOfBirth;

    public function getName(){
        return $this->name;
    }
}

$person = new Person();
echo $person->getName();