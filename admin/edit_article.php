<?php

	$title ='Modifier un article';
	require_once('includes/authenticated.php');
	include_once('includes/actions.php');
	include_once('includes/header.php');
	
	$query = mysql_query("SELECT title, text FROM articles WHERE id_article=" . mysql_real_escape_string($_GET['id_article'])); 
	$article = mysql_fetch_assoc($query);
	
	if ($article === false) {
		header("Location: gestion_articles.php");
	}
	
	?>
	
	<h2>Modifier un article</h2>
	
	<form class="edit_article" action="edit_article.php?id_article=<?php echo $_GET['id_article']; ?>" method="post">
		<input type="hidden" name="action" value="edit_article"/>
		<fieldset class="fields"/>
			<div class="row">
				<label for="title">Titre</label>
				<input type="text" name="title" value="<?php
					if (isset($_POST['title'])){
						echo $_POST['title'];
					}
					else {
						echo $article['title'];
						}
				?>" />
				
				<?php	
					if (isset($messages) && isset($messages['title'])) {
						echo '<div class="error">' . $messages['title'] . '</div>';
					}
				?>
			</div>
			<div class="row">
			<label for="text">Texte</label>
				<textarea name="text"><?php
					if (isset($_POST['text'])){
						echo $_POST['text'];
				}
					else {
						echo $article['text'];
						}
						
				?></textarea>
				<?php
					if (isset($messages) && isset($messages['text'])) {
						echo'<div class="error">' . $messages['text'] . '</div>';
					}
				?>
			</div>
		</fieldset>
		
		<fieldset class="actions">
			<button type="submit">Enregistrer</button>
		</fieldset>
	</form>
	
	<?php include_once('includes/footer.php'); ?>