<?php
	require_once('includes/authenticated.php');
	include_once('includes/actions.php');
	$title = "Mon espace d'administration";
	include_once('includes/header.php');
?>
	Mon Administration
	<br />Bonjour <?php echo $_SESSION['user']; ?>
<?php include_once('includes/footer.php'); ?>