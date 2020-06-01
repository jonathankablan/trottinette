<?php 

if(isset($_POST['login'])) {

	if (validateForm($_POST['email']) == false) {
		$data = [
			'reponse' => false,
			'message' => 'Veillez entrer votre email !'
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

	$email = $_POST['email'];
	$stmt = $dbh->prepare('SELECT * FROM user WHERE email = :email');
	$stmt->bindParam(':email', $email);
	$stmt->execute();
	$login_response = $stmt->fetch();

	if ($login_response == false) {
		$data = [
			'reponse' => false,
			'message' => 'Cet adresse email est inconnu !'
		];
		return false;
	}

	if (password_verify($_POST['password'], $login_response['password']) !== true) {
		$data = [
			'reponse' => false,
			'message' => 'Votre mot de passe est incorrect !'
		];
		return false;
	} 

	$data = [
		'reponse' => true,
		'message' => 'Connexion valider'
	];

	// Ajouter les valeurs de l'utilisateur connecte au sessions
	$_SESSION['id'] = $login_response['id'];
	$_SESSION['nom'] = $login_response['nom'];
	$_SESSION['prenom'] = $login_response['prenom'];
	$_SESSION['role'] = $login_response['role'];

	header('Location: app/user/dashboard.php');
}

?>