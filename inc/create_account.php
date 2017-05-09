<?php
/**
 * Created by PhpStorm.
 * User: Derek
 * Date: 5/8/2017
 * Time: 8:01 PM
 */

/*
$_POST['username']
$_POST['email']
$_POST['password']
*/

if(!isset($_POST['username'])||!isset($_POST['password'])){
    die("Data Error");
}