<?php 
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Arcelia Osorio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<!-- Nav -->
		<nav id="nav">
				<ul class="container">
					<li><a href="index.php">Présentation</a></li>
					<li><a href="projets.php">Projets</a></li>
				</ul>
			</nav>

		<div class="wrapper style1">
            <h1>Liste des Projets</h1>
</div>
    <?php if (!empty($projets)): ?>
        <?php foreach ($projets as $projet): ?>
            <div class="container">
                <h3><?php echo htmlspecialchars($projet['name']); ?></h3>
                <p>Compétence : <?php echo htmlspecialchars($projet['competence']); ?></p>
                <p>Durée : <?php echo htmlspecialchars($projet['duree']); ?></p>
                <p>Description : <?php echo htmlspecialchars($projet['description']); ?></p>
                <p>Dates : <?php echo htmlspecialchars($projet['dates']); ?></p>
                <span class="image fit"><img src="<?php echo htmlspecialchars($projet['image']); ?>" alt=""></span>
            </div>
            <hr>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucun projet trouvé.</p>
    <?php endif; ?>

		
    </body>