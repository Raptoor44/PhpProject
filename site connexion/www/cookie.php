<?php

session_start();

include_once("message.php");


$Nom = $_POST["Nom"];
$Prenom = $_POST["Prenom"];
$Message = $_POST["Message"];

$test_account = new Message($Nom, $Prenom, $Message);

$s = serialize($test_account);


setcookie("Message", $s, time()+3600);



?>