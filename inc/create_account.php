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

$stmt = $conn->prepare("SELECT COUNT(*) FROM `users` WHERE `username` = ?");
$stmt->bind_param("s",$username);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
if($count>0){
    die("Error: Username already exists.");
}

$email = $_POST['email'];
//salt and hash
$password = password_hash($_POST['password'],PASSWORD_BCRYPT);

$stmt = $conn->prepare("INSERT INTO `users` (`username`,`email`,`password`) VALUES (?,?,?)");

$stmt->bind_param("sss",$username,$email,$password);

//execute
$stmt->execute();

$conn->close();

//header("Location: ../signin.php");