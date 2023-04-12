<?php
include_once('fragments/isAuthenticated.php');
include_once 'autoload.php';
$usersInfos = $_POST;
$userRepository = new UserRepository();
$userRepository->create($usersInfos);
header("Location:users.php");