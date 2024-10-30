<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
</head>
<body>

<div class="form-container">
    <h2>Formulaire d'Inscription</h2>
    <form action="inscription_handler.php" method="POST">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>
        <br>

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>
        <br>

        <label for="date_naissance">Date de Naissance :</label>
        <input type="date" id="date_naissance" name="date_naissance" required>
        <br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" placeholder="Entrez votre email" required>
        <br>

        <label for="mot_de_passe">Mot de Passe :</label>
        <input type="password" id="mot_de_passe" name="mot_de_passe" placeholder="Entrez votre mot de passe" required>
        <br>

        <button type="submit">S'inscrire</button>
        
    </form>
    <a href="global_foot.php">se connecter </a>
</div>

</body>
</html>
