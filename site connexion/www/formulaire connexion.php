<?php

session_start();
include_once("connexion.php");

include_once("Compte.php");

$username = $_POST["username"];
$password = $_POST["password"];

$test_account = new Compte($username, $password);


$bdd = new PDO("mysql:host=localhost;dbname=info2_i201210", "i201210", "Giome453");


$sql = "SELECT * FROM mdp WHERE username='$username' AND password = MD5('$password')";


$result = $bdd->query($sql);


$s = serialize($test_account);


setcookie("TestCookie", $s, time() + 3600);


if ($result->rowCount() == 1) {

    header('Location: Connexion_reussite.php');
    exit();
} else {
    header('Location: Erreur_connexion.html');
    exit();
}

?>