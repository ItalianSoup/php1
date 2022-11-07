<?php
    session_start();
    if(isset($_SESSION['sesja'])&&$_SESSION['sesja']==true)
    {
        header("Location: page.php");
        exit;
    }
?>


<html>
    <head>
        <link rel="stylesheet" href="stylesheet.css">
        <META charset="utf-8">
    </head>
    <body>
        <div class="container">
            <h1>Logowanie</h1>
            <form action="login.php" method="post">
                <div class="txt">
                    <input type="text" name="login" required>
                    <span></span>
                    <label>Login</label>
                </div>
                <div class="txt">
                    <input type="password" name="password" required>
                    <span></span>
                    <label>Password</label>
                </div>
                <div id="button"> <input type="submit" name="button" value="Login"></div>
            </form>
        </div>
    </body>
</html>