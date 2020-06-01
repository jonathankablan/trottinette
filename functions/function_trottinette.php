<?php 

if(isset($_POST['trottinette'])) {

	if (validateForm($_POST['modele']) == false) {
		$data = [
			'reponse' => false,
			'message' => 'Veillez entrer un modele !'
		];
		return false;
	}

	if (validateForm($_POST['marque']) == false) {
		$data = [
			'reponse' => false,
			'message' => 'Veillez entrer une marque !'
		];
		return false;
	}

	if (validateForm($_POST['regulateur_vitesse']) == false) {
		$data = [
			'reponse' => false,
			'message' => 'Veillez entrer un regulateur de vitesse !'
		];
		return false;
	}

	if (validateForm($_POST['feu_avant']) == false) {
		$data = [
			'reponse' => false,
			'message' => 'Veillez entrer un feu avant !'
		];
		return false;
	}

	if (validateForm($_POST['feu_arriere']) == false) {
		$data = [
			'reponse' => false,
			'message' => 'Veillez entrer un feu arriere !'
		];
		return false;
	}

	if (validateForm($_POST['duree_vie']) == false) {
		$data = [
			'reponse' => false,
			'message' => 'Veillez entrer une duree de vie !'
		];
		return false;
	}

	$modele = $_POST["modele"];
	$marque = $_POST["marque"];
	$autonomie = $_POST["autonomie"];
	$temps_trajet = $_POST["temps_trajet"];
	$compteur_km = $_POST["compteur_km"];
	$temperature = $_POST["temperature"];
	$regulateur_vitesse = $_POST["regulateur_vitesse"];
	$feu_avant = $_POST["feu_avant"];
	$feu_arriere = $_POST["feu_arriere"];
	$duree_vie = $_POST["duree_vie"];
	$vitesse = $_POST["vitesse"];
	$kilometrage = $_POST["kilometrage"];

	$stmt = $dbh->prepare('INSERT INTO trottinette (modele, marque, autonomie, vitesse, kilometrage,temps_trajet, compteur_km, temperature, regulateur_vitesse, feu_avant, feu_arriere, duree_vie) VALUES (:modele, :marque, :autonomie, :vitesse, :kilometrage, :temps_trajet, :compteur_km, :temperature, :regulateur_vitesse, :feu_avant, :feu_arriere, :duree_vie)');

	$stmt->bindParam(':modele', $modele);
	$stmt->bindParam(':marque', $marque);
	$stmt->bindParam(':vitesse', $vitesse);
	$stmt->bindParam(':kilometrage', $kilometrage);
	$stmt->bindParam(':autonomie', $autonomie);
	$stmt->bindParam(':temps_trajet', $temps_trajet);
	$stmt->bindParam(':compteur_km', $compteur_km);
	$stmt->bindParam(':temperature', $temperature);
	$stmt->bindParam(':regulateur_vitesse', $regulateur_vitesse);
	$stmt->bindParam(':feu_avant', $feu_avant);
	$stmt->bindParam(':feu_arriere', $feu_arriere);
	$stmt->bindParam(':duree_vie', $duree_vie);

	// Execution de la requete SQL
	$reponse_trottinette_insert = $stmt->execute();

	if ($reponse_trottinette_insert == true) {
		$data = [
			'reponse' => true,
			'message' => 'Votre trottinette à bien été enregistrer.'
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