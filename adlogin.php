<?php
include('config.php');
session_start();
if(isset($_POST['upload'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $_SESSION['user'] = 'hafez';
    $msg = "Failed bro :(";
    if(($email == "hafez" || $email == "fahd") && $pass == "@@@@@@@@"){
        header("Location: admin.php");
    }

    else{
        header("Location: admlog.php?check=" . urlencode("Failed bro"));
    }
}

?>