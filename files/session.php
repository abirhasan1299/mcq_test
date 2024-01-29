<?php
    session_start();
    session_regenerate_id();
    if(!isset($_SESSION['email']) && !isset($_SESSION['password']) && !isset($_SESSION['name']) && !isset($_SESSION['id'])){
        header("location:login.php");
    }
?>
