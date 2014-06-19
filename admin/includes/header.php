<!DOCTYPE html>

<html>

	<head>
		<meta charset="UTF-8"/>
		<title><?php echo $title; ?></title>
		<link type="text/css" href="style.css" media="screen" rel="stylesheet" />
		


<meta name="description" content="Ceci est l'espace Administration de mon blog" />
</head>

<body>
	<header>
		<h1>
			Administration de mon blog
		</h1>
	<nav>
		<ul>
				<?php if (isset($_SESSION) && isset($_SESSION['user'])) { ?>
				<!-- <li class="home"><a href="index.php">Accueil</a></li> pour créer une classe différente pour le css-->
				<li><a href="index.php">Accueil</a></li>
				<li><a href="#">Choix de menu 1</a></li>
				<li><a href="#">Choix de menu 2</a></li>
				<li><a href="gestion_articles.php">Gestion des articles</a></li>
				<li><a href="#">mon CV</a></li>
				<li class="deconnexion"><a href="?action=deconnexion">Déconnexion</a></li>
				<?php } ?>
		</ul>
		<div style="clear: both"></div> <!-- <sert à élargir le bloc nav -->
		
	</nav>
	</header>