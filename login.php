<?php

include 'connection.php';

$type = $_POST['type'];

if ($type == "student") {
    include 'userLogin.php';
    return;
}else{
    include 'staffLogin.php';
    return;
}

?>