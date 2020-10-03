<?php


session_start();

ini_set("display_errors", 1);
ini_set("log_errors", 1);
$command = json_decode(exec('python3 '. dirname(__FILE__) .'/fakeDataGenerator/fakeDataGen.py'), true);

include (dirname(__FILE__)."/layout/virtualBoard.php");
//Check session
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
    exit;
}
?>
<title>Virtual Board</title>

    <div class="Center" style="float:">
        <h2>Posts</h2>
        <label id="person"></label>
        <br>
        <label id="age"></label>
        <br>
        <label id="telephone"></label>
        <br>
        <label id="quote"></label>
        <br>
        <label>Picture</label>
        <div id="imagename"></div>
        <script type='text/javascript'>
            <?php

            $js_array = json_encode($command);
            echo "var javascript_array = ". $js_array . ";\n";
            ?> var array_code = <?php echo $js_array; ?>;
            console.log(array_code);
            document.getElementById('person').innerHTML = "Person: " + array_code[0]['person'];
            document.getElementById('age').innerHTML = "Age: " +array_code[0]['age'];
            document.getElementById('telephone').innerHTML = "Tlf: " +array_code[0]['telephone'];
            document.getElementById('quote').innerHTML = "Quote of the day: " +array_code[0]['quote'];
            var val = document.getElementById('imagename').value,
                src = array_code[0]['image'],
                img = document.createElement('img');
            img.height = 250;
            img.width = 250;
            img.src = src;
            document.body.appendChild(img);
            setTimeout(importNewPost, 3000);

            function importNewPost() {
                console.log("123");
                <?php
                    echo "123123";
                $command = json_decode(exec('python3 '. dirname(__FILE__) .'/fakeDataGenerator/fakeDataGen.py'), true);
                ?>
            }


        </script>

    </div>
