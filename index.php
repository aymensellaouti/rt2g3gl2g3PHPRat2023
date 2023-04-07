<?php
session_start();
if(!isset($_SESSION['nbVisite'])){
//Si première visite => Bienvenu dans notre plateforme
    echo "Bienvenu dans notre plateforme";
    $_SESSION['nbVisite'] = 1;
} else {
//Si néme visite => Merci pour votre fidélité c'est votre néme visite
    $_SESSION['nbVisite'] += 1;
    $nbVisite = $_SESSION['nbVisite'];
    echo "Merci pour votre fidélité c'est votre $nbVisite visites";
}