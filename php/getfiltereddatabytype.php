<?php
	include "connect.php";
	if (isset($_POST['filter']))
		
	{
		$name = filter_var($_POST['filter'], FILTER_SANITIZE_STRING);
			$command = "SELECT * FROM inventory WHERE type = '$name'";
			$stmt = $dbh->prepare($command);
			$params = [];
			$stmt ->execute($params);
			$stuff = $stmt->fetchAll();
			echo json_encode($stuff);
			die();
	}

	?>
