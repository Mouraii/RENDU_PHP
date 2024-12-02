<?php
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
?>

<?php 


// On vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom_utilisateur = $_POST['nom_utilisateur'];
    $mot_de_passe = $_POST['mdp'];

    // Mot de passe attendu pour l'exemple
    $mot_de_passe_attendu = "SELECT user_id FROM users WHERE nom_utilisateur = :nom_utilisateur AND mdp = :mdp";
    $stmt = $conn->prepare($sql);
    $stmt
    $stmt
    $stmt
    $stmt 

    // Vérification du mot de passe
     
    if ($mot_de_passe === $mot_de_passe_attendu) {
        $message = "Authentification réussie";
    } else {
        $message = "Mot de passe incorrect";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
</head>
<body>
    <h1>Connexion</h1>

    <?php 
    // Si un message a été défini, on l'affiche
    if (isset($message)) {
        echo "<p>$message</p>";
    }
    ?>

    <form method="POST">
        <label for="nom_utilisateur">Nom d'utilisateur :</label><br>
        <input type="text" id="nom_utilisateur" name="nom_utilisateur" required><br><br>
        <label for="mdp">Mot de passe :</label><br>
        <input type="password" id="mdp" name="mdp" required><br><br>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>

