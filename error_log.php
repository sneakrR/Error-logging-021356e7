<html>

<?php

function countDown($count) {
    if($count>10) {
        throw new Exception("Het getal moet tussen 10 en 1 zijn");
    }
    return true;
}

try {
    countDown(2);
    echo "als je dit ziet is je getal tussen 1 en 10";
}
    catch(Exception $e) {
        echo "Message: " . $e->getMessage();
    }

if (!mysqli_connect("localhost","bad_user","bad_password","my_db")) {
    error_log("Failed to connect to database!", 0);
}