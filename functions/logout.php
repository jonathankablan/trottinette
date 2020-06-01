<?php 

	// Demarre la session
	session_start();

	$_SESSION['id'] = null;
	$_SESSION['nom'] = null;
	$_SESSION['prenom'] = null;
	$_SESSION['role'] = null;

	header('Location: ../index.php');

?>