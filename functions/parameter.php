<?php

// Demarre la session
session_start();

// SESSION pour l'identification des utilisateurs
if ($_SESSION['id'] == null) 
{
	$_SESSION['id'] = null;
	$_SESSION['nom'] = null;
	$_SESSION['prenom'] = null;
	$_SESSION['role'] = null;
}

// Pour les messages d'erreur
$data = [
	'reponse' => null,
	'message' => ''
];

// fonction pour verifier les valeur envoyer en POST
function validateForm($value) {

	if (!isset($value)) { // ISSET verifie si la value existe et n'est pas null
		return false;
	}

	if (empty($value)) { // EMPTY verifie si le champs n'est pas vide
		return false;
	}

	return true;
}

?>