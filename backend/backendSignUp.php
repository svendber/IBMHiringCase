<?php

include (dirname(__FILE__)."/config.php");
session_start();
ini_set("display_errors", 1);
ini_set("log_errors", 1);

if (isset($_POST['register'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['usernameSignin'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $teams = $_POST['teams'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $password_confirm_hash = password_hash($confirmPassword, PASSWORD_BCRYPT);

    $querySignUp = pg_query($dbconn, "SELECT * FROM users WHERE EMAIL= '$email'");
    $rows = pg_num_rows($querySignUp);

    if ($password !== $confirmPassword){
        echo '<p class="error">Passwords does not match!</p>';
    }

    if ($rows > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }

    if ($rows == 0 && $password === $confirmPassword) {
        $query = pg_query($dbconn,"INSERT INTO users(username,password,email, first_name, last_name, team) VALUES ('$username', '$password_hash','$email','$firstName','$lastName','$teams')");
        if ($query) {
            echo '<p class="success">Your registration was successful! You will be redirected back to Login!</p>';
            header( "refresh:3;url=login.php" );
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }

}

