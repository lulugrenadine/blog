<?php
	$title = "Page d'Authentification";
	include_once('includes/actions.php');
	include_once('includes/header.php');
	
	if (isset($_POST['action']) && $_POST['action'] === 'login') {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$login = login($username, $password);
	if ($login === false) {
		echo 'Mauvais identifiants';
		}
		
	else {
		session_start();
		$_SESSION['user'] = array (
			'id' => $login['id_user'],
			'username' => $login['username']
			);
	
		header("Location: index.php");
	}
	
}
	require_once('views/login.view.php');
	include_once('includes/footer.php');

