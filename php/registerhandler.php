<?php
  include "connect.php";
  if (isset($_POST['emailPHP']) || isset($_POST['passwordPHP']) || isset($_POST['displayNamePHP'])) {
    $email = filter_var($_POST['emailPHP'], FILTER_SANITIZE_STRING);
    $password = md5(filter_var($_POST['passwordPHP'], FILTER_SANITIZE_STRING));
    $displayName = filter_var($_POST['displayNamePHP'], FILTER_SANITIZE_STRING);
    $birthdate = filter_var($_POST['birthdatePHP'], FILTER_SANITIZE_STRING);
    $subscribed = filter_var($_POST['subscribedPHP'], FILTER_SANITIZE_STRING);

    $stmt1 = $dbh->prepare("SELECT * FROM users WHERE email = '$email'");
    $stmt1->execute();
    $stuff1 = $stmt1->fetchAll();
    
    if (count($stuff1) == 0)
    {
    $command = "INSERT INTO users (email, password, displayName, birthdate, subscribed) VALUES ('$email','$password','$displayName','$birthdate',$subscribed)";
    $stmt = $dbh->prepare($command);
    $params = [];
    $stmt->execute($params);
    $stuff = $stmt->fetchAll();

    exit('success');
    }else
    {
      echo "User Already Registered";
    }
  }

?>