<?php

$config = require('config.php');
require_once('functions.php');

$configDB = $config['db'];
connectDB($configDB['host'], $configDB['username'], $configDB['password'], $configDB['db']);

/*	$logins = array(
	array('username' => 'Véronique', 'password'=> 'kiki'),
	array('username' => 'login2', 'password' => 'pass2')
);  */
		


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
		mysql_query("INSERT INTO articles (title, text, date, user) VALUES ('" . 
		mysql_real_escape_string($title) . "', '" . mysql_real_escape_string($text
		) ."', NOW(), " . $_SESSION['user']['id'] . ")");
			header("Location: gestion_articles.php");
			}
	
	}
	
	if (isset($_GET['action']) && $_GET['action'] === 'deconnexion') {
	unset($_SESSION['user']);
	header("Location: login.php");
	}

	
		
	