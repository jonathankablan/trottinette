<?php 

	$stmt = $dbh->prepare('SELECT * FROM geolocalisation LEFT JOIN trottinette ON  geolocalisation.id_trottinette = trottinette.id');
	$stmt->execute();
	$geolocalisations_response = $stmt->fetchAll();

?>