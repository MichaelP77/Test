<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/index2.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    
<header>
    <a href="index2.php">Accueil</a>
    <a href="contact.php">Nous contacter</a>
    <a href="inscription.php">Inscription</a>
</header>

<div class="rectangle2">
        <div class="titre">Inscription</div>
        <form action="traitement_inscription.php" method="POST">
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required placeholder="truc.truc@truc.truc"><br><br>

        <label for="telephone">Numéro Téléphone :</label><br>
        <input type="tel" id="telephone" name="telephone" required placeholder="+0000000000"><br><br>

        <label for="adresse">Adresse :</label><br>
        <input type="adresse" id="adresse" name="adresse" required><br><br>

        <button>submit</button>
        <button>cancel</button>
    </form>
    </div>

</body>
</html>