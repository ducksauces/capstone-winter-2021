<?php
if (isset($_SESSION['loggedIn'])) {
    header("Location: index.php");
    exit();
  }
if (isset($_POST['login'])) {
  $email = filter_var($_POST['emailPHP'], FILTER_SANITIZE_STRING);
  $password = md5(filter_var($_POST['passwordPHP'], FILTER_SANITIZE_STRING));
  $command = "SELECT admin, displayname FROM users WHERE email = '$email' AND password = '$password'";
  $stmt = $dbh->prepare($command);
  $params = [];
  $stmt->execute($params);
  $stuff = $stmt->fetchAll();

  echo json_encode($stuff[0][0]);
  if ($stuff) {
    $_SESSION['loggedIn'] = "1";
    $_SESSION['email'] = $email;
    $_SESSION['role'] = $stuff[0][0];
    $_SESSION['name'] = $stuff[0][1];

    exit("success");
  } else {
    exit("failure");
  }
}
?>