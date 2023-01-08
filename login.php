<?php

    session_start();

    require_once "connect.php";

    $connect = @new mysqli($host, $db_user, $db_password, $db_name);

    if($connect->connect_errno!=0)
    {
        echo "Error: ".$connect->connect_errno;
    }
    else
    {
        $login = $_POST['login'];
        $haslo = $_POST['password'];

        $sql = "SELECT * FROM users WHERE login='$login' AND password='$haslo'";

            if($result=@$connect->query($sql))
            {
                $answer = $result->num_rows;
                if($answer>0)
                {
                    $record = $result->fetch_assoc();
                    $_SESSION['sesja'] = true;
                    $_SESSION['id'] = $record['ID'];
                    $_SESSION['user'] = $record['login'];
                    $result->free_result();
                    header('Location: page.php');

                }
                else
                {
                    header('Location: index.php');
                }
            }
            else
            {

            }
        $connect->close();
    }

?>