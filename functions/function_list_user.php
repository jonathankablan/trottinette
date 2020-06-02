<?php 

	$stmt = $dbh->prepare('SELECT * FROM user WHERE delete_at IS NULL');
	$stmt->execute();
	$users_response = $stmt->fetchAll();

?>