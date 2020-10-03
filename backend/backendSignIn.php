<?php

include "config.php";

session_start();
if (isset($_POST['login'])){

    $usernametest = $_POST['username'];
    $password = $_POST['password'];
    $query = pg_query($dbconn, "SELECT * FROM users WHERE username = '$usernametest'");
    $numrows = pg_numrows($query);


    if ($numrows === 0) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        $queryArray = pg_fetch_array($query, 0, PGSQL_NUM);
        if (password_verify($password, $queryArray[2])) {
            $_SESSION['user_id'] = $queryArray[0];
            echo '<p class="success">Congratulations, you are logged in!</p>';
            header('Location: virtualBoard.php');
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}

?>


