Fo
<html>
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
</head>
<body>
<div id="container">
    <!-- zone de connexion -->

    <form action="Formulaire_inscription.php" method="POST">
        <h1>Inscription</h1>

        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required>

        <input type="submit" id='submit' value="S'inscrire" >

    </form>
</div>
</body>
</html>