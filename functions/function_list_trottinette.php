<?php 

// date_reservation

	$stmt = $dbh->prepare('SELECT * FROM trottinette LEFT JOIN reservation ON trottinette.id = reservation.id_trottinette');
	$stmt->execute();
	$trottinette_response = $stmt->fetchAll();

?>