<?php 

if(isset($_POST['reservation'])) {

	var_dump($_POST['id_trottinette'], validateForm($_POST['id_trottinette']));

	if (validateForm($_POST['id_trottinette']) == false) {
		$data = [
			'reponse' => false,
			'message' => 'Veillez entrer une trottinette !'
		];
		return false;
	}

	if (validateForm($_POST['id_user']) == false) {
		$data = [
			'reponse' => false,
			'message' => 'Veillez choisir une personne !'
		];
		return false;
	}

	if (validateForm($_POST['date_reservation']) == false) {
		$data = [
			'reponse' => false,
			'message' => 'Veillez entrer une date de reservation !'
		];
		return false;
	}

	$id_trottinette = $_POST["id_trottinette"];
	$id_user = $_POST["id_user"];
	$date_reservation = $_POST["date_reservation"];

	$stmt = $dbh->prepare('INSERT INTO reservation (id_trottinette, id_user, date_reservation
) VALUES (:id_trottinette, :id_user, :date_reservation)');

	$stmt->bindParam(':id_trottinette', $id_trottinette);
	$stmt->bindParam(':id_user', $id_user);
	$stmt->bindParam(':date_reservation', $date_reservation);

	// Execution de la requete SQL
	$reponse_reservation_insert = $stmt->execute();

	if ($reponse_reservation_insert == true) {
		$data = [
			'reponse' => true,
			'message' => 'Votre reservation à bien été enregistrer.'
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