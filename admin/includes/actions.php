<?php

$config = require('config.php');
require_once('functions.php');

$configDB = $config['db'];
connectDB($configDB['host'], $configDB['username'], $configDB['password'], $configDB['db']);

$logins = array(
	array('username' => 'Véronique', 'password'=> 'kiki'),
	array('username' => 'login2', 'password' => 'pass2')
);
		

if (isset($_POST['action']) && $_POST['action'] === 'login') {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$login = login($username, $password);
	if ($login === false) {
		echo 'Mauvais identifiants';
		}

	else {
		session_start();
		$_SESSION['user'] = $login['username'];
		header("Location: index.php");
	}
	
}
if (isset($_GET['action']) && $_GET['action'] === 'deconnexion') {
	unset($_SESSION['user']);
	header("Location: login.php");
	}
if (isset($_POST['action']) && $_POST['action'] === 'add_article'){
	$title = $_POST['title'];
	$text = $_POST['text'];
	
	$messages = array();
	if (empty($title)) {
		$messages['title'] ='Veuillez saisir un titre';
	}
	if (empty($text)) {
		$messages['text'] ='Veuillez saisir un article';
	}
	if (count($messages) === 0) {
		mysql_query("INSERT INTO articles (title, text, date, user) VALUES ('" . mysql_real_escape_string($title) . "', '" . mysql_real_escape_string($text) ."', NOW(), 1)");
			header("Location: gestion_articles.php");
			}
	
	}
	
	if (isset($_GET['action']) && $_GET['action'] === 'deconnexion') {
	unset($_SESSION['user']);
	header("Location: login.php");
	}
if (isset($_POST['action']) && $_POST['action'] === 'edit_article'){
	$title = $_POST['title'];
	$text = $_POST['text'];
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
	
		if (isset($_GET['action']) && $_GET['action'] === 'delete_article') {
		mysql_query("DELETE FROM articles WHERE id_article=" . mysql_real_escape_string($_GET['id_article']));
		
			header("Location: gestion_articles.php");
		}
	