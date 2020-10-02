<?php

//Error handling
ini_set("display_errors", 1);
ini_set("log_errors", 1);

require "layout/header.php";
include "backend/backendSignIn.php";
 ?>

<body>
<h2>Enter Username and Password</h2>
<div class = "container">

    <form class = "form-signin" role = "form" action = "" method = "post">
        <label>Username</label>
        <input type = "text" class = "form-control" name = "username" pattern="[a-zA-Z-0-9]+" required autofocus></br>
        <label>Password</label>
        <input type = "password" class = "form-control" name = "password" required>
        <button class = "btn btn-lg btn-primary btn-block" type = "submit" name = "login">Login</button>
        Sign up <a href = "signUp.php" tite = "Register"> here.
    </form>
</div>

</body>
</html>
