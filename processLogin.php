<?php
session_start();
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
if (isset($email) && isset($password)){
    if ($email === 'admin@gmail.com' && $password === "0000") {
        header("Location:home.php" );
        $_SESSION['username']=$email;
    } else {
        $_SESSION['errorMessage']="veuillez vérifier vos credentials";
        header("Location:login.php");
    }
} else {
    $_SESSION['errorMessage']="veuillez vérifier vos credentials";
    header("Location:login.php");
}