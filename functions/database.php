<?php 

	// Connexion a la base de donnée
	$host = 'localhost';
	$dbname = 'database_trottinette';
	$username = 'root';
	$password = '';

	try{
		$dbh = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	} catch (PDOException $e) {
		print "ERREUR DATABASE ! : " . $e->getMessage();
	}

?>