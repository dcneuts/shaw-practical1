<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Shaw Academy Practical Application Project">
    <meta name="author" content="Derek Neuts">
    <title>Shawpify</title>
    <!-- Bootstrap CSS Components from CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class='navbar navbar-inverse navbar-fixed-top'>
    <div class='container-fluid'>
        <header class='navbar-header'>
            <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
                <span class='glyphicon glyphicon-menu-hamburger mobmenu'></span>
            </button>
            <a class='navbar-brand' href='index.php'>Shawpify Home</a>
        </header>
        <div class='collapse navbar-collapse' id='myNavbar'>
            <ul class='nav navbar-nav'>
                <li>
                    <a href='products.php'>Products</a>
                </li>
                <li>
                    <a href='#'>Deals</a>
                </li>
            </ul>
            <ul class='nav navbar-nav navbar-right'>
                <?php
                    if(isset($_SESSION['id'])){
                        echo "<li><a href='signout.php'><span class='glyphicon glyphicon-user'></span>Sign Out</a></li>";
                    }
                    else {
                        echo "<li><a href='signin.php'><span class='glyphicon glyphicon-user'></span>Sign In</a></li>";
                    }
                ?>
                <li>
                    <a href='#'><span class='glyphicon glyphicon-shopping-cart'>Cart</span></a>
                </li>
                <li>
                    <form class='navbar-form' action='#' method='POST'>
                        <input type='text' class='form-control' placeholder='Search for a Product'>
                        <button type='submit' class='btn btn-primary'>
                            <span class='glyphicon glyphicon-search'></span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>