<?php

    //$_POST['username'];
    //$_POST['password'];

    if(!isset($_POST['username'])||!isset($_POST['password'])) {
        //below for debugging
        die("Error:".var_dump($_POST));
    }

    session_start();
    include_once "config.php";
    $conn = new mysqli(SERVER_NAME,USERNAME,PASSWORD,DATABASE);

    if($conn->connect_error){
        die("Connection failed:".$conn->connect_error);
    }

	$stmt = $conn->prepare("SELECT `id`,`username`,`password`
								FROM `users`
								WHERE `username` = ?");
	$stmt->bind_param("s",$_POST['username']);
    $stmt->execute();
    $stmt->bind_result($id,$name,$password);
    $stmt->fetch();
    //comparison of passwords for later
    //session variables using stored pass/user for testing
    //redirection based on good or bad login

    //password comparison, not manual
    //first is given by user, second is hashed on the database
    //auto detects salt and hash
    if(password_verify($_POST['password'],$password)){
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $name;
        header("Location: ../index.php");
    }
    else {
        header("Location: ../signin.php");
    }

    $conn->close();