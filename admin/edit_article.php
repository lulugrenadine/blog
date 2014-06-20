<?php

	$title ='Modifier un article';
	require_once('includes/authenticated.php');
	include_once('includes/actions.php');
	
	$query = mysql_query("SELECT title, text FROM articles WHERE id_article=" . mysql_real_escape_string($_GET['id_article'])); 
	$article = mysql_fetch_assoc($query);
	
	if ($article === false) {
		header("Location: gestion_articles.php");
	}
	
	$articleTitle = $article['title'];
	$articleText = $article['text'];
	
	if (isset($_POST['action']) && $_POST['action'] === 'form_article'){
		$articleTitle = $title = $_POST['title'];
		$articleText = $text = $_POST['text'];
		$idArticle = $_GET['id_article'];
	
	$messages = array();
	if (empty($title)) {
		$messages['title'] ='Veuillez saisir un titre';
	}
	if (empty($text)) {
		$messages['text'] ='Veuillez saisir un article';
	}
	if (count($messages) === 0) {
		mysql_query("UPDATE articles SET title='" . mysql_real_escape_string
		($title) . "', text='" . mysql_real_escape_string($text) ."' WHERE 
		id_article=" . mysql_real_escape_string($idArticle));
			header("Location: gestion_articles.php");
			}
			
	}
	
	include_once('includes/header.php');
	require_once('views/edit_article.view.php');
	include_once('includes/footer.php');