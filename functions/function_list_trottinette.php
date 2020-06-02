<?php 

	$stmt = $dbh->prepare('SELECT trottinette.modele, trottinette.marque, trottinette.autonomie, trottinette.vitesse, trottinette.kilometrage, trottinette.temps_trajet, trottinette.compteur_km, trottinette.temperature, trottinette.regulateur_vitesse, trottinette.feu_avant, trottinette.feu_arriere, trottinette.duree_vie, trottinette.id as id_trottinette, trottinette.created_at, reservation.date_reservation FROM trottinette LEFT JOIN reservation ON trottinette.id = reservation.id_trottinette');
	$stmt->execute();
	$trottinettes_response = $stmt->fetchAll();

?>