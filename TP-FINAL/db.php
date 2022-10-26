<?php

$server = "localhost";
$user = "root";
$pass = "root";
$database = "formulaire";

$connection = mysqli_connect($server, $user, $pass, $database);

if (!$connection) {
    die("Erreur");
}
?>
