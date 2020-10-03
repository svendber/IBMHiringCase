<?php

//include('backend/config.php');
include (dirname(__FILE__).'/layout/headerSignUp.php');
include (dirname(__FILE__).'/backend/backendSignUp.php');


?>
<title>Register</title>
<h2>Sign up</h2>
<form method="post" action="" name="signup-form">
    <div class="form-element">
        <label>First name</label>
        <input type="text" name="firstName" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Last name</label>
        <input type="text" name="lastName" pattern="[a-zA-Z0-9]+" required />
    </div>
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
    <div class="form-element">
        <label>Confirm Password</label>
        <input type="password" name="confirmPassword" required />
    </div>
    <div class="form-element">
        <label>Team *optional*</label>
        <input type="text" name="teams"  />
    </div>
    <button type="submit" name="register" value="register">Register</button>
</form>

