<?php
	include "connect.php";

	$command = "SELECT * FROM events";
	$stmt = $dbh->prepare($command);
	$params = [];
	$stmt ->execute($params);
	$stuff = $stmt->fetchAll();
	echo json_encode($stuff);
	die();
	?>
