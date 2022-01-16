<html>
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
</head>
<body>

<h1>Vous vous êtes bien connectez, vous allez être redirigé vers le site...</h1>


<?php

session_start();
include_once("Compte.php");
include_once("message.php");

$s = $_COOKIE["TestCookie"];




  $account = unserialize($s);


$mdp = $account->getPassword();
$username = $account->getUsername();









echo "
 <form enctype='multipart/form-data' action='cookie.php' method='post'>
    <div>
        <label for='name'>Nom :</label>
        <input type='text' id='name' name='Nom'>
    </div>
         
            <div>
        <label for='Prénom'>Prénom :</label>
        <input type='text' id='prenom' name='Prenom'>
    </div>

      <div>
        <label for='Ville'> message</label>
        <input type='text' id='ville' name='Message'>
    </div>
  
 
                <div class='button'>
        <button type='submit'>Envoyer le message d'arriver</button>
    </div>
    </form>

    ";

if(isset($_COOKIE["Message"])){
    $s = $_COOKIE["Message"];

    $account = unserialize($s);



    echo "Nom : ".$account->getNom()."     Prenom : ".$account->getPrenom()."        </br></br></br></br> ";
    echo $account->getMessage();

}








?>




</body>
</html>







