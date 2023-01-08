<?php
    session_start();
    if(!isset($_SESSION['sesja']))
    {
        header("Location:index.php");
        exit;
    }
?>

<html>
    <head>
        <META charset="utf-8">
        <title>Controll panel</title>
        <link rel="stylesheet" href="stylesheet2.css">
        <link rel="stylesheet" href="buttons.css">
    </head>
    <body>
        <div class="nav">
            <div class="option"><?php echo $_SESSION['user']; ?></div>
            <div class="option" id="logout"><a href="logout.php">Logout</a> </div>

        </div>
        <div class="hibg">
            <div class="panel-box">
                <div class="buttons"> <button id="buttton1" class="btn">Click me!</button></div><div class="buttons"> <button class="btn">Click me!</button></div>
                <div class="buttons"> <button class="btn">Click me!</button></div> <div class="buttons"> <button class="btn">Click me!</button></div>
            </div>
        </div>
        <div id="footer">
            <div id="photo"></div>
        </div>
    </body>
</html>