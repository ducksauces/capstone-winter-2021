<?php
include 'connect.php';
if (isset($_POST['name']) || isset($_POST['description'])) {

        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);

        if (!empty($_FILES['photo']['name']) && (isset($_POST['name'])))
        {
            copy($_FILES["photo"]["tmp_name"], __DIR__.'../eventimages/'. $_FILES["photo"]['name']);       

            $photoName = $_FILES["photo"]['name'];
            $command = "INSERT INTO events (name, description, photo) VALUES ('$name', '$description', '$photoName')";
            $stmt = $dbh->prepare($command);
            $params = [];
            $stmt->execute($params);
            echo "Successfully uploaded";
        }
        else
        {
            echo "Incomplete fields or invalid file type.";

        }



}
?>