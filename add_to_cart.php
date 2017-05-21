<?php
    secure_session_start();

    array_push($_SESSION['cart'],$_POST['productId']);