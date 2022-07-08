<?php 

session_start();

if(isset($_GET['logout'])){
    unset($_SESSION['success']);
    session_destroy();
    
    header("Location: login.php");
}
