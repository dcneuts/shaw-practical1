<?php
    session_start();
    include "inc/head.inc.php";
?>
    <!--Header-->
    <header>
        <div class='container'>
            <h1>Login</h1>
        </div>
    </header>
<body>

    <!--Main-->
    <main class="container">
        <form action="inc/login.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input id="username" type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input id="password" type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <hr>
        <p>Don&#8217;t have an account?</p>
        <a href="signup.php" class="btn btn-primary">Sign Up Here</a>
    </main>


    <!--Footer Area-->
<?php
    include "inc/foot.inc.php";
?>