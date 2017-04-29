<?php
/**
 * Created by PhpStorm.
 * User: Derek
 * Date: 4/29/2017
 * Time: 10:59 AM
 * PHP Class Demo
 */

class Person {
    public $name;
    protected $dateOfBirth;

    public function __construct($name) {
        $this->name = $name;
    }
}
$names = array("Benjamin","Rafa","Hassan","Jade","Ali","Rob");

for ($i=0;$i<sizeof($names);$i++) {
    $person = new Person($names[$i]);
    echo $person->name."<br>";
}