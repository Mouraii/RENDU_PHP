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
					<li><a href="#top">Présentation</a></li>
					<li><a href="#work">Compétences</a></li>
					<li><a href="projets.php">Projets</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<article id="top" class="wrapper style1">
				<div class="container">
					<div class="row">
						<div class="col-4 col-5-large col-12-medium">
							<span class="image fit"><img src="images/Arcelia.png" alt="" /></span>
						</div>
						<div class="col-8 col-7-large col-12-medium">
							<header>
								<h1>Bonjour je suis<strong> Arcelia Osorio</strong>.</h1>
							</header>
							<p>Je suis Arcelia Osorio, passionnée par la tech et la diversité dans ce domaine. En plus de mon travail de développeuse, j'organise des meetups pour encourager les femmes à entrer dans la tech. J'adore voyager, découvrir de nouvelles cultures et m'inspirer de différentes perspectives. Quand je ne code pas, je pratique la photographie, joue de la guitare ou dévore des livres de science-fiction.</p>
							<p>Ceci est mon <strong>Portfolio</strong> un dossier constitué par mes soins regroupant mes différentes experiences et compétences qui me décrivent. </p>
							<a href="#work" class="button large scrolly">Mes compétences</a>
						</div>
					</div>
				</div>
			</article>

		<!-- Work -->
			<article id="work" class="wrapper style2">
				<div class="container">
					<header>
						<h2>Voici une liste de mes compétences</h2>
						<p>ceci est une liste non exhaustive des compétences que j'ai pu développer.</p>
					</header>
					<div class="row aln-center">
						<div class="col-4 col-6-medium col-12-small">
							<section class="box style1">
								<span class="icon featured fa-comments"></span>
								<h3>Création de site web</h3>
								<p>Au cour des mes expériences j'ai maîtrisé la création et la mise en place de site web avec l'aide de plusieurs outils tel que : HTML, JAVASCRIPT, CSS, SASS </p>
							</section>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<section class="box style1">
								<span class="icon solid featured fa-camera-retro"></span>
								<h3>Sécurisation de site web</h3>
								<p>Mise en place d'options de sécurisation tel que l'identification d'accès à un site </p>
							</section>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<section class="box style1">
								<span class="icon featured fa-thumbs-up"></span>
								<h3>Amélioration de site web</h3>
								<p>Mise en place d'amélioration graphique et logiciel pour modérniser l'architécture du site</p>
							</section>
						</div>
					</div>
					<footer>
						<a href="#portfolio" class="button large scrolly">Mes récents projets</a>
					</footer>
				</div>
			</article>

		<!-- Portfolio -->
			<article id="portfolio" class="wrapper style3">
				<div class="container">
					<header>
						<h2>Voici plusieurs de mes projets que j'ai réalisé ces derniers temps</h2>
						<p>Ceci est une liste non exhaustive des compétences que j'ai pu développer.</p>
					</header>
					<div class="row">
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="Projet1.php" class="image featured"><img src="https://images01.nicepagecdn.com/page/54/93/html-template-preview-54937.webp" alt="" /></a>
								<h3><a href="Projet1.php">Animalerie</a></h3>
								<p>Création d'un site pour une animalerie</p>
							</article>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="Projet2.php" class="image featured"><img src="https://uxdt.nic.in/wp-content/uploads/2020/02/loginform3_p-3.png" alt="" /></a>
								<h3><a href="Projet2.php">Sécurisation d'un site aux États-unis</a></h3>
								<p>Je me suis occupé de sécuriser un site de revente de chaussures situé aux États-unis</p>
							</article>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="Projet3.php" class="image featured"><img src="images/Capture d'écran 2024-11-20 170119.png" alt="" /></a>
								<h3><a href="Projet3.php">Stylisation d'un site Anglais</a></h3>
								<p>Remise en état d'un site d'une société anglaise au cours d'une mission de transition</p>
							</article>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="Projet4.php" class="image featured"><img src="https://images-wixmp-530a50041672c69d335ba4cf.wixmp.com/templates/image/0221720df7030f436831645e3e4e2f6a48aae2a68ac54981dd6a2e5fc744a76e.jpg" alt="" /></a>
								<h3><a href="Projet4.php"></a>Site Immobilier</h3>
								<p>J'ai travaillé sur la création et la sécurisation d'un site de vente immobilière, en mettant en place des solutions pour protéger les données et optimiser la performance du site.</p>
							</article>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="projet5.php" class="image featured"><img src="images/Capture d'écran 2024-11-20 190423.png" alt="" /></a>
								<h3><a href="projet5.php">sécurisation d'un site post-attaque</a></h3>
								<p>à la suit d'une attaque par un groupe de cyberciminels, cette companie de transports m'a contacté pour mettre en place des solutions de sécurité</p>
							</article>
						</div>
						<div class="col-4 col-6-medium col-12-small">
							<article class="box style2">
								<a href="Projet6.php" class="image featured"><img src="images/Capture d’écran_20-11-2024_18724_.jpeg" alt="" /></a>
								<h3><a href="Projet6.php">Service de lavage auto</a></h3>
								<p>J'ai conçu et optimisé un site de service de lavage auto, en améliorant l'esthétique, la performance et la sécurité</p>
							</article>
						</div>
					</div>
					<footer>
						<button href="#contact" id="scrollNext" class="button large scrolly">Mes réseaux</button>
					</footer>
				</div>
			</article>

		<!-- Contact -->
			<article id="contact" class="wrapper style4">
						<div class="col-12">
							<hr />
							<h3>Vous pouvez me trouver sur :</h3>
							<ul class="social">
								<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
								<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
								<li><a href="#" class="icon brands fa-tumblr"><span class="label">Tumblr</span></a></li>
								<li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
								<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
							</ul>
							<hr />
						</div>
					</div>
					<footer>
						<ul id="copyright">
							<li>Fait par le groupe 7 : Titouan Clément Nassim</li><li>Arcelia Osorio</a></li>
						</ul>
					</footer>
				</div>
			</article>



	</body>
</html>