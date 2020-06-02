<?php 

	$stmt = $dbh->prepare('SELECT * FROM reservation');
	$stmt->execute();
	$reservations_response = $stmt->fetchAll();

?>