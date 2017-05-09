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

if(!isset($_POST['username'])||!isset($_POST['email'])||!isset($_POST['password'])){
    die("Data Error");
}

//assume validity of data
include_once "config.php";

$conn = new mysqli(SERVER_NAME, USERNAME, PASSWORD, DATABASE);
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$username = $_POST['username'];
$email = $_POST['email'];
//salt and hash
$password = password_hash($_POST['password'],PASSWORD_BCRYPT);

$stmt = $conn->prepare("INSERT INTO `users` (`username`,`email`,`password`) VALUES (?,?,?)");

$stmt->bind_param("sss",$username,$email,$password);

//execute
$stmt->execute();

$conn->close();

header("Location: ../signin.php");