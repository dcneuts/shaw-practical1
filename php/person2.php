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

    public function __construct($name) {
        $this->name = $name;
    }
    public function __get($prop) {
        return $this->$prop." is currently doing some crazy things.";
    }
}
$names = array("Benjamin","Rafa","Hassan","Jade","Ali","Rob");

for ($i=0;$i<sizeof($names);$i++) {
    $person = new Person($names[$i]);
    echo $person->name."<br>";
}