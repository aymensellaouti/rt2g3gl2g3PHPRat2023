<?php
include_once('fragments/isAuthenticated.php');
include_once 'autoload.php';
$id = htmlspecialchars($_GET['id']);
$userRepository = new UserRepository();
$user = $userRepository->delete($id);
header("Location:users.php");
