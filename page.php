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
    </head>
    <body>
        <div class="nav">
            <div class="option"><?php echo $_SESSION['user']; ?></div>
            <div class="option"><a href="logout.php" style="color: #686868">Logout</a> </div>

        </div>
        <div class="hibg">
            <div class="panel-box">

            </div>
        </div>
        <div id="footer">
            
        </div>
    </body>
</html>