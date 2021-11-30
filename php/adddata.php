<?php
$types = ["Guitar", "Bass", "Drums", "Orchestral", "Accessory", "Other"];

include 'connect.php';
if (isset($_POST['name']) || isset($_POST['type']) || isset($_POST['description']) || isset($_POST['brand']) || isset($_POST['stock']) || isset($_POST['price'])) {

        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $type = filter_var($_POST['type'], FILTER_SANITIZE_STRING);
        $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
        $brand = filter_var($_POST['brand'], FILTER_SANITIZE_STRING);
        $stock = filter_var($_POST['stock'], FILTER_SANITIZE_NUMBER_INT);
        $price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_INT);

        $type = $types[(intval($type))-1];

        if (!empty($_FILES['photo']['name']) && (isset($_POST['name'])))
        {
            copy($_FILES["photo"]["tmp_name"], __DIR__.'../images/'. $_FILES["photo"]['name']);       

            $photoName = $_FILES["photo"]['name'];
            $command = "INSERT INTO inventory (name, type, description, brand, stock, price, oldprice, rating, photo) VALUES ('$name','$type','$description','$brand',$stock,$price,0,0,'$photoName')";
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