<?php

session_start();


if(isset($_SESSION['logged']) || $_SESSION['logged'] != true){
    header("location: login.php");
    // echo "hii";
    session_unset();
    session_destroy();
    exit;
}

?>