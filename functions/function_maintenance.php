<?php 

	$stmt = $dbh->prepare('SELECT * FROM maintenance LEFT JOIN trottinette ON  maintenance.id_trottinette = trottinette.id');
	$stmt->execute();
	$maintenances_response = $stmt->fetchAll();

?>