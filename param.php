<?php

$server="localhost";
$user="archana";
$pass="archana";
$db="archana";



$link = mysqli_connect($server , $user, $pass);
if (!$link) {
   die('Impossible de se connecter : ' . mysqli_error());
}

// Rendre la base de données foo, la base courante
$db_selected = mysqli_select_db($link,$db);
if (!$db_selected) {
   die ('Impossible de sélectionner la base de données : ' . mysqli_error());
}

?>

