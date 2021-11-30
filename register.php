
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
  <script src="js/registercheck.js"></script>
  <script>
    $.get("nav/nav.php", function(data) {
      $("#nav-placeholder").replaceWith(data);
    });
  </script>
  <h1 class="m-5">Register Account</h1>
  <div>
    <div class="alert alert-success m-5" role="alert" id="alertSuccess" style = "display: none;">
      Account created! You can now log in with those credentials.
    </div>
    <div class="alert alert-danger m-5" role="alert" id="alertDanger" style = "display: none;">
      An error occurred
    </div>
  </div>
  <form id="login" class="m-5">
    <div class="form-group ">
      <label for="username" class="col-sm-2 col-form-label">Email</label>
      <input type="email" onfocus = "clearWarnings()" class="form-control p-2" id="email" placeholder="email" required>
    </div>
    <div class="form-group">
      <label for="password" class="col-sm-2 col-form-label">Password</label>
      <input type="password" onfocus = "clearWarnings()" class="form-control p-2" id="password" placeholder="Password" required>
    </div>
    <div class="form-group">
      <label for="name" class="col-sm-2 col-form-label">Name</label>
      <input type="text" onfocus = "clearWarnings()" class="form-control p-2" id="name" placeholder="Full Name" required>
    </div>
    <div class="form-group">
      <label for="birthdate" class="col-sm-2 col-form-label">Birthdate</label>
      <input type="date" onfocus = "clearWarnings()" class="form-control p-2" id="birthdate" required>
    </div>
    <div class="form-group">
      <label for="subscribe" class="col-sm-2 col-form-label">Subscribe to new events</label>
      <input type="checkbox" onfocus = "clearWarnings()" class="form-check-input p-2 " id="subscribed">
    </div>

    <input type="submit" class="btn btn-primary" id="submitButton" onclick = "clearWarnings()" value="Register">
  </form>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script async src="https://cdn.snipcart.com/themes/v3.2.1/default/snipcart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
  </script>
  <div hidden id="snipcart" data-api-key="Mzk3NTJiZWQtYjI2YS00MDhhLTg0Y2ItNmIxYTc1NTEwODU3NjM3NjcxNjcxNjEyOTExNDU0"></div>

</body>

</html>