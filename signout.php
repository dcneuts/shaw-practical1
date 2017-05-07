<?php
    session_start();
    $_SESSION=array();
    $params=session_get_cookie_params();
    //unset the cookie by setting time/date in the past
    setcookie(session_name(), '', time()-42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
    session_destroy();
    ?>

<?php
    include_once ("inc/head.inc.php");
    ?>

<header>
    <div class="container">
        <h1>Log Out</h1>
    </div>
</header>

<main class="container">
    <p>You have been successfully logged out.</p>
    <a href="signin.php" class="btn btn-primary">Log Back In</a>
</main>

<?php
    include("inc/foot.inc.php");
    ?>