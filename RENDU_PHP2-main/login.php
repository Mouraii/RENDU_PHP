<?php
// Connexion à la base de données
$host = 'localhost';
$dbname = 'projets';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Traitement du formulaire de connexion
$error = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom_utilisateur = trim($_POST['nom_utilisateur']);
    $mdp = trim($_POST['mdp']);
    $hashed_password = password_hash($mdp, PASSWORD_DEFAULT);

    if (!empty($nom_utilisateur) && !empty($mdp)) {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE nom_utilisateur = :nom_utilisateur");
        $stmt->bindParam(':nom_utilisateur', $nom_utilisateur);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Comparaison directe des mots de passe si la base utilise un hachage SHA-256
            $hashed_input_password = $hashedPassword = password_hash($mdp, PASSWORD_BCRYPT);
            echo $hashed_input_password;
            if (password_verify($mdp, $hashedPassword)) {
                // Connexion réussie
                session_start();
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['nom'] = $user['nom'];
                $config_data = [
                    'user_id' => $user['user_id'],
                    'nom' => $user['nom'],
                    'login_time' => date('Y-m-d H:i:s'),
                ];

                $config_file_path = __DIR__ . "/config_" . $user['user_id'] . ".json";
                file_put_contents($config_file_path, json_encode($config_data, JSON_PRETTY_PRINT));
                header('Location: index.php?user_id=' . $_SESSION['user_id']);
                exit;
            } else {
                $error = "Identifiants incorrects. Veuillez réessayer.";
            }
        } else {
            $error = "Identifiants incorrects. Veuillez réessayer.";
        }
    } else {
        $error = "Veuillez remplir tous les champs.";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f9;
        }
        .container {
            text-align: center;
            padding: 20px;
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
        }
        .container h1 {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            margin-bottom: 15px;
        }
        #breach-info {
            margin-top: 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Connexion</h1>
        <?php if (!empty($error)) : ?>
            <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="nom_utilisateur">Nom d'utilisateur</label>
                <input type="text" id="nom_utilisateur" name="nom_utilisateur" required>
            </div>
            <div class="form-group">
                <label for="mdp">Mot de passe</label>
                <input type="password" id="mdp" name="mdp" required>
            </div>
            <button type="submit" class="btn">Se connecter</button>
        </form>

        <button type="button" class="btn" id="check-breach-btn">Dernière Faille</button>

        <div id="breach-info"></div>
    </div>

    <script>
    document.getElementById('check-breach-btn').addEventListener('click', function() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'https://haveibeenpwned.com/api/v3/breaches', true);
        xhr.setRequestHeader('User-Agent', 'PHP-Client');
        
        xhr.onload = function() {
            if (xhr.status >= 200 && xhr.status < 300) {
                var data = JSON.parse(xhr.responseText);

                if (data.length > 0) {
                    // Sort breaches by the breach date in descending order to get the latest one
                    data.sort(function(a, b) {
                        return new Date(b.BreachDate) - new Date(a.BreachDate);
                    });

                    // Get the latest breach
                    let latestBreach = data[0];
                    let breachInfo = `
                        <h2>La violation la plus récente</h2>
                        <p><strong>Nom de l'attaque :</strong> ${latestBreach.Title}</p>
                        <p><strong>Date de la violation :</strong> ${latestBreach.BreachDate}</p>
                        <p><strong>Description :</strong> ${latestBreach.Description}</p>
                    `;
                    document.getElementById('breach-info').innerHTML = breachInfo;
                } else {
                    document.getElementById('breach-info').innerHTML = 'Aucune violation trouvée.';
                }
            } else {
                console.error('Erreur lors de la récupération des violations');
                document.getElementById('breach-info').innerHTML = 'Erreur lors de la récupération des violations.';
            }
        };
        
        xhr.onerror = function() {
            console.error('Erreur de réseau');
            document.getElementById('breach-info').innerHTML = 'Erreur de réseau.';
        };
        
        xhr.send();
    });
</script>
</body>
</html>
