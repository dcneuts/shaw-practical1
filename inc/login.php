<?php

    //$_POST['username'];
    //$_POST['password'];

    if(isset($_POST['username'])||!isset($_POST['password'])) {
        //below for debugging
        die("Error:".var_dump($_POST));
    }
