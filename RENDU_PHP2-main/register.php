<?php 
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css" />
    <title>Inscription</title>
</head>

<?php 
try {
    // Connexion à la base de données
    $conn = new PDO('mysql:host=localhost;dbname=Projets;charset=utf8', 'root', 'root');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupérer et nettoyer les données du formulaire
        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']); 
        $login = trim($_POST['nom_utilisateur']);
        $mdp = trim($_POST['mdp']);
  
        // Validation des champs
        $errors = [];
        if (empty($nom)) $errors[] = "Le champ 'nom' est requis.";
        if (empty($prenom)) $errors[] = "Le champ 'prenom' est requis.";
        if (empty($login)) $errors[] = "Le champ 'nom_utilisateur' est requis.";
        if (empty($mdp)) $errors[] = "Le champ 'mot de passe' est requis.";
  
        // Si aucun problème, on insère dans la base de données
        if (empty($errors)) {
            // Préparer les données pour Python
            $escapedPassword = escapeshellarg($mdp);
            
            // Exécuter le script Python pour hasher le mot de passe
            $pythonScript = __DIR__ . '/hash_password.py';
            $command = "python3 $pythonScript $escapedPassword";
            $hashedPassword = trim(exec($command, $output, $statusCode));
            
            if (!$hashedPassword) {
                echo "<p style='color: red;'>Erreur lors du hashage du mot de passe.</p>";
            } else {
                // Échapper les autres données pour la requête SQL
                $escapedNom = $conn->quote($nom);
                $escapedPrenom = $conn->quote($prenom);
                $escapedLogin = $conn->quote($login);
                $escapedHashedPassword = $conn->quote($hashedPassword); // Échapper le mot de passe hashé
                
                // Construire la requête SQL
                $sql = "INSERT INTO users (nom, prenom, nom_utilisateur, mdp) VALUES ($escapedNom, $escapedPrenom, $escapedLogin, $escapedHashedPassword)";
        
                // Exécution de la requête
                $conn->exec($sql);
                echo "<p style='color: green;'>Utilisateur ajouté avec succès.</p>";
            }
        } else {
            // Affichage des erreurs
            foreach ($errors as $error) {
                echo "<p style='color: red;'>$error</p>";
            }
        }
    }
} catch (PDOException $e) {
    // Gestion des erreurs de connexion ou d'exécution SQL
    echo "Erreur : Une erreur est survenue. Veuillez réessayer plus tard.";
    echo "Erreur : " . $e->getMessage();
}
?>

<body class='is-preload'>
    <div class='wrapper style1'>
        <h1>Créer un compte</h1>
        <form method="POST">
            <label for="nom">Nom :</label><br>
            <input type="text" id="nom" name="nom" required><br><br>
            <label for="prenom">Prénom :</label><br>
            <input type="text" id="prenom" name="prenom" required><br><br>
            <label for="nom_utilisateur">Nom d'utilisateur :</label><br>
            <input type="text" id="nom_utilisateur" name="nom_utilisateur" required><br><br>
            <label for="mdp">Mot de passe :</label><br>
            <input type="password" id="mdp" name="mdp" required><br><br>
            <button type="submit">S'inscrire</button>
        </form>

        <p>Vous avez déjà un </p>
        <a href="login.php" class="btn">Go to Login</a>
    </div>
</body>
</html>
