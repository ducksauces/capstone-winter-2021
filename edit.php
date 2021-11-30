<?php
  include 'php/connect.php';
  session_start();

  if (!($_SESSION['role']) == "1") {
    header("Location: index.php");
    exit;
  } 

  $id = $_GET['id'];
	$command = "SELECT * FROM users WHERE id = $id";
	$stmt = $dbh->prepare($command);
	$stmt ->execute();
  $user = $stmt->fetch(PDO::FETCH_OBJ);

  if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['displayName'])  && isset($_POST['birthdate'])  && isset($_POST['subscribed'])  && isset($_POST['admin'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $displayName = $_POST['displayName'];
    $date = $_POST['birthdate'];
    $birthdate = date('Y-m-d', strtotime($date));
    $subscribed = $_POST['subscribed'];
    $admin = $_POST['admin'];

    $command2 = "UPDATE users SET email = '$email', password = '$password', displayName = '$displayName', birthdate = '$birthdate' , subscribed = $subscribed, admin = $admin WHERE id = $id";
    $stmt2 = $dbh->prepare($command2);
    $stmt2 ->execute();
    header ('Location: manage.php');
  } 
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="preconnect" href="https://app.snipcart.com">
  <link rel="preconnect" href="https://cdn.snipcart.com">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.snipcart.com/themes/v3.2.1/default/snipcart.css" />

  <title>Hello, world!</title>
  <script src="js/jquery-3.6.0.min.js"></script>
</head>

<body>

  <!-- Duplicate this into Javascript so all pages can have the same NavBar -->
  <div id="nav-placeholder">
  </div>
  <script src="https://code.jquery.com/jquery.min.js"></script>
  <script>
    $.get("nav/nav.php", function(data) {
      $("#nav-placeholder").replaceWith(data);
    });
  </script>
  <h1 class="m-5">Edit Account</h1>

  
  <form id="login" method = "POST" class="m-5 container">
    <div class="form-group ">
      <label for="username" class="col-sm-2 col-form-label">Email</label>
      <input type="text" class="form-control p-2" id="email" name = "email" placeholder="email" value = "<?= $user->email ?>" required>
    </div>
    <div class="form-group">
      <label for="password" class="col-sm-2 col-form-label">Password</label>
      <input type="password" class="form-control p-2" id="password"   name = "password" placeholder="Password" required>
    </div>
    <div class="form-group">
      <label for="name" class="col-sm-2 col-form-label">Name</label>
      <input type="text" class="form-control p-2" id="name" placeholder="Full Name" name = "displayName"  value = "<?= $user->displayName ?>" required>
    </div>
    <div class="form-group">
      <label for="birthdate" class="col-sm-2 col-form-label">Birthdate</label>
      <input type="date" class="form-control p-2" id="birthdate"   name = "birthdate" value = "<?= $user->birthdate ?>" required>
    </div>
    <div class="form-group">
      <label for="subscribe" class="col-sm-2 col-form-label">Subcribed (1 for yes, 0 for no)</label>
      <input type="number" class="form-control p-2 "  name = "subscribed"  value = "<?= $user->subscribed ?>" id="subscribed" min = "0" max = "1" required>
    </div>
    <div class="form-group">
      <label for="admin" class="col-sm-2 col-form-label">Admin (1 for yes, 0 for no)</label>
      <input type="number" class="form-control p-2 " value = "<?= $user->admin ?>"  name = "admin"  id="admin" min = "0" max = "1" required>
    </div>
    <input type="submit" class="btn btn-primary" id="submitButton" value="Save Changes">
    <a href = "manage.php" class="btn btn-primary ">Cancel</a>
  </form>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script async src="https://cdn.snipcart.com/themes/v3.2.1/default/snipcart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
  </script>
  <div hidden id="snipcart" data-api-key="Mzk3NTJiZWQtYjI2YS00MDhhLTg0Y2ItNmIxYTc1NTEwODU3NjM3NjcxNjcxNjEyOTExNDU0"></div>

</body>

</html>