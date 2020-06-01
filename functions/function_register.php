<?php 

if(isset($_POST['register'])) {
	
	if (validateForm($_POST['nom']) == false) {
		$data = [
			'reponse' => false,
			'message' => 'Veillez entrer votre nom !'
		];
		return false;
	}

	if (validateForm($_POST['prenom']) == false) {
		$data = [
			'reponse' => false,
			'message' => 'Veillez entrer votre prenom !'
		];
		return false;
	}

	if (validateForm($_POST['email']) == false) {
		$data = [
			'reponse' => false,
			'message' => 'Veillez entrer votre email !'
		];
		return false;
	}

	$email = $_POST['email'];
	$stmt = $dbh->prepare('SELECT * FROM user WHERE email = :email');
	$stmt->bindParam(':email', $email);
	$stmt->execute();

	if ($stmt->fetch() == true) {
		$data = [
			'reponse' => false,
			'message' => 'Cet adresse email existe déjà !'
		];
		return false;
	}

	if (validateForm($_POST['password']) == false) {
		$data = [
			'reponse' => false,
			'message' => 'Veillez entrer votre le mot de passe !'
		];
		return false;
	}

	if (validateForm($_POST['password_confirm']) == false) {
		$data = [
			'reponse' => false,
			'message' => 'Veillez entrer votre le mot de passe de confirmation !'
		];
		return false;
	}

	if (strlen($_POST['password_confirm']) < 6) {
		$data = [
			'reponse' => false,
			'message' => 'Votre mot de passe doit contenir minimum 6 valeurs !'
		];
		return false;
	}

	if ($_POST['password'] !== $_POST['password_confirm']) {
		$data = [
			'reponse' => false,
			'message' => 'Votre mot de passe doit etre identique au mot de passe de confirmation !'
		];
		return false;
	}

	$email = $_POST['email'];
	$stmt = $dbh->prepare('INSERT INTO user (nom, prenom, email, password, status, role) VALUES (:nom, :prenom, :email, :password, :status, :role)');

	//hasher le password pour la database
	$nom = htmlentities($_POST['nom']);
	$prenom = htmlentities($_POST['prenom']);
	$email = htmlentities($_POST['email']);
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$status = 1;
	$role = 'ROLE_USER';

	$stmt->bindParam(':nom', $nom);
	$stmt->bindParam(':prenom', $prenom);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':password', $password);
	$stmt->bindParam(':status', $status);
	$stmt->bindParam(':role', $role);

	// Execution de la requete SQL
	$reponse_register_insert = $stmt->execute();

	if ($reponse_register_insert == true) {
		$data = [
			'reponse' => true,
			'message' => 'Votre compte à bien été enregistrer.'
		];
		return true;
	} else {
		$data = [
			'reponse' => false,
			'message' => 'Erreur d\'insertion en base'
		];
		return false;
	}
}

?>