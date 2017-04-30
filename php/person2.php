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
        return $this->$prop." is in the array.<br>";
    }
    //With set, first is the origin and then what you'd like it to be
    public function __set($prop,$value) {
        $this->$prop = $value;
    }
}
$names = array("Benjamin","Rafa","Hassan","Jade","Ali","Rob");

for ($i=0;$i<sizeof($names);$i++) {
    $person = new Person($names[$i]);
    //Override the names in the array and echo confirmation of same
    $person->name = "Test";
    echo $person->name;
}