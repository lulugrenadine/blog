<?php
	$title = "Page d'Authentification";
	include_once('includes/actions.php');
	include_once('includes/header.php'); //chemin relatif cad raccourci 
?>
	<h2>Formulaire d'identification</h2>
	
	<hr />  <!-- pour faire un trait -->

	<p>Veuillez vous authentifier pour accéder à l'espace protégé</p>

	<form class="login" action="login.php" method="post"><!-- on appelle la page login -->
		<input type="hidden" name="action" value="login" />

		<fieldset class="fields"> <!-- on rajoute des classes pour préparer le terrain pour le css -->
			<div class="row">
				<label for="username">Votre nom d'utilisateur</label> <!-- nom du champ -->
				<input class="arrondi" type="text" name="username" value="<?php 
				if (isset($_POST['username'])) { 
				echo $_POST['username'];
				}
				?>" />
				
			</div>
			<div class="row">
				<label for="password">Votre mot de passe</label>
				<input class="arrondi" type="password" name="password" value="<?php 
				if (isset($_POST['password'])) { 
				echo $_POST['password'];
				}
				?>" /> 
				
				<!-- le type password affichera des points -->
			</div>
		</fieldset>
		<fieldset class="actions">
			<button type="submit">Login</button> <!-- bouton obligatoire -->
		</fieldset>
	</form>
	
<?php include_once('includes/footer.php');?>
				
				




