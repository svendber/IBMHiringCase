<?php

//include('backend/config.php');
include ('layout/headerSignUp.php');
include ('backend/backendSignUp.php');


?>
<title>Register</title>
<h2>Sign up</h2>
<form method="post" action="" name="signup-form">
    <div class="form-element">
        <label>Username</label>
        <input type="text" name="usernameSignin" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Email</label>
        <input type="email" name="email" required />
    </div>
    <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="register" value="register">Register</button>
</form>

