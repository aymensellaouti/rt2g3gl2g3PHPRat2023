<?php
//include_once 'Personne.php';
include_once 'autoload.php';
$personne = new Personne();
$personne2 = new Personne('Farah');

echo $personne->getName();
echo $personne2->getName();