<?php
session_start();
include 'php/connect.php';
include 'php/loginhandler.php';
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
      <div class="alert alert-danger m-5" role="alert" id="alertDanger" style = "display: none;">
      
    </div>
<h1 class="m-5">Log In to Mountain Music</h1>
  <form id="login" action="login.php" method="post" class="m-5">
    <div class="form-group">
      <label for="username" class="col-sm-2 col-form-label">Username</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>
    <div class="form-group">
      <label for="password" class="col-sm-2 col-form-label"> Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
    <input type="submit" class="btn btn-primary" id="submitButton" value="Log in">
  </form>


  <script src = "js/logincheck.js"></script>
  <script async src="https://cdn.snipcart.com/themes/v3.2.1/default/snipcart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
  </script>
  <div hidden id="snipcart" data-api-key="Mzk3NTJiZWQtYjI2YS00MDhhLTg0Y2ItNmIxYTc1NTEwODU3NjM3NjcxNjcxNjEyOTExNDU0"></div>

</body>

</html>