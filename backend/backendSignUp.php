<?php

include "config.php";
session_start();
ini_set("display_errors", 1);
ini_set("log_errors", 1);
if (isset($_POST['register'])) {
    $username = $_POST['usernameSignin'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $querySignUp = pg_query($dbconn, "SELECT * FROM users WHERE EMAIL= '$email'");

    $rows = pg_num_rows($querySignUp);


    if ($rows > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }

    if ($rows == 0) {
        $query = pg_query($dbconn,"INSERT INTO users(USERNAME,PASSWORD,EMAIL) VALUES ('$username', '$password_hash','$email')");


        if ($query) {
            echo '<p class="success">Your registration was successful! You will be redirected back to Login!</p>';
            header( "refresh:3;url=../virtualBoard.php" );
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}

