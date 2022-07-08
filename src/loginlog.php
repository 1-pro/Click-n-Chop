<?php
session_start();
require_once('function.php');
//initiating variables

$username="";

// connect to db


$errors = [];
$db = click() or die("could not connect to db");

// var_dump($db);

if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($db, $_POST['userNamel']);
    $password = mysqli_real_escape_string($db, $_POST['passwordl']);
    if(empty($username)){
        array_push($errors, "Username is required");
        
    }
    if(empty($password)){
        array_push($errors, "password is required");

    }

    if(count($errors) == 0){
        

        $sql = "SELECT * FROM `user` WHERE email = '$email' && password= '$password'";
        $query = mysqli_query($db, $sql);
        

     $names = mysqli_fetch_assoc($query);
        
        
        $res = mysqli_num_rows($query);
        $s = mysqli_fetch_assoc($res);
        
        if($res){
            $_SESSION['success'] = "logged in successfully";
            $_SESSION['Name'] = $names['Name'];
         
             
           header("Location: about.php");
        }else{
            array_push($errors, "Incorrect username or password");
    header("Location: login.php");
            
        }
    }
}