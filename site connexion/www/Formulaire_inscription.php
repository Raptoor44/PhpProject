<?php


include_once("connexion.php");
include_once("Compte.php");


$username = $_POST["username"];
$password = $_POST["password"];

$test_account = new Compte($username, $password);


$bdd = new PDO("mysql:host=localhost;dbname=info2_i201210", "i201210", "Giome453");


$sql = "INSERT INTO mdp VALUES(NULL , '$username',  MD5('$password'));";


$bdd->exec($sql);


header('Location: Inscription_reussite');
exit();
?>