<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/index2.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>

<header>
    <a href="index2.php">Accueil</a>
    <a href="contact.php">Nous contacter</a>
    <a href="inscription.php">Inscription</a>
</header>

<div class="rectangle2">
        <div class="titre">Nous contacter</div>
        <form action="traitement_contact.php" method="POST">
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required placeholder="truc.truc@truc.truc"><br><br>

        <label for="telephone">Message :</label><br>
        <textarea type="mess" id="message" name="message" required></textarea><br><br>


        <button>submit</button>
        <button>cancel</button>
    </form>
    </div>
    
</body>
</html>