<?php

include "config.php";

session_start();
if (isset($_POST['login'])){

    $usernametest = $_POST['username'];
    $password = $_POST['password'];
    $query = pg_query($dbconn, "SELECT * FROM users WHERE username = '$usernametest'");


    try {
        $queryArray = pg_fetch_array($query, 0, PGSQL_NUM);
    } Catch (Exception $e) {
        Echo $e->getMessage();
    }

    if (!$query) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {

        if (password_verify($password, $queryArray[2])) {
            $_SESSION['user_id'] = $queryArray[0];
            echo  $_SESSION['user_id'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
            header('Location: newPage.php');
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}



?>


