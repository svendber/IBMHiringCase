<?php


session_start();
//Der skal error handlings op. Se video
//Husk kommentarer!

ini_set("display_errors", 1);
ini_set("log_errors", 1);
$command = json_decode(exec('python3 '. dirname(__FILE__) .'/fakeDataGenerator/fakeDataGen.py'), true);

include "layout/virtualBoard.php";
//Check session
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit;
}
?>
<title>Virtual Board</title>

    <div class="Center" style="float">
        <label>First name</label>

    </div>
