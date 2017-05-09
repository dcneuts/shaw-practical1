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

//BEGIN security checks
if(!isset($_POST['username'])||!isset($_POST['email'])||!isset($_POST['password'])){
    die("Data Error");
}

if(strlen($_POST['username'])>150){
    die("Username too long.");
}

if(!strpos($_POST['email'],"@")){
    die("Invalid email address.");
}

//assume validity of data
include_once "config.php";

$conn = new mysqli(SERVER_NAME, USERNAME, PASSWORD, DATABASE);
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$username = $_POST['username'];
//Active connection, must close it first
$stmt = $conn->prepare("SELECT COUNT(*) FROM `users` WHERE `username` = ?");
$stmt->bind_param("s",$username);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
if($count>0){
    die("Error: Username already exists.");
}
$stmt->close();

$email = $_POST['email'];
//salt and hash
$password = password_hash($_POST['password'],PASSWORD_BCRYPT);

$stmt2 = $conn->prepare("INSERT INTO `users` (`username`,`email`,`password`) VALUES (?,?,?)");

$stmt2->bind_param("sss",$username,$email,$password);

//execute
$stmt2->execute();

$conn->close();

//header("Location: ../signin.php");