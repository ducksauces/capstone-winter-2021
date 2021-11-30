<?php
	include "connect.php";

	$command = "SELECT brand, type type FROM inventory";
	$stmt = $dbh->prepare($command);
	$params = [];
	$stmt ->execute($params);
	$stuff = $stmt->fetchAll();
	echo json_encode($stuff);
	die();
	?>
