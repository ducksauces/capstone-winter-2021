<?php
// Javascript Injection based on session values
session_start();


if (isset($_SESSION['role'])) {
  if ($_SESSION['role'] == "1") {
    echo '<script type = "text/javascript">document.getElementById("adminOnlyControls").style.display = "block";</script>';
  } else {
    echo '<script type = "text/javascript">document.getElementById("adminOnlyControls").style.display = "none";</script>';
  }
}
if (isset($_SESSION['loggedIn'])) {
  echo '<script type = "text/javascript">document.getElementById("loginbutton").style.display = "none"; document.getElementById("profilebutton").style.display = "block"; document.getElementById("cartSummary").style.display = "block"; document.getElementById("registerbutton").style.display = "none"; document.getElementById("logoutbutton").style.display = "block"; document.getElementById("displayname").innerHTML = "' . $_SESSION['name'] . '"; document.getElementById("emaillabel").innerHTML = "' . $_SESSION['email'] . '"; </script>';
} else {
  echo '<script type = "text/javascript">document.getElementById("loginbutton").style.display = "block"; document.getElementById("profilebutton").style.display = "none";  document.getElementById("cartSummary").style.display = "none"; document.getElementById("registerbutton").style.display = "block"; document.getElementById("logoutbutton").style.display = "none";</script>';
}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="60%" height="60%" class="d-inline-block align-top" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="results.php">Catalogue</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="events.php">Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
        </li>
        <li class="nav-item dropdown" style="display: none;" id="adminOnlyControls">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin Options
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="insert.php">Add Instrument</a></li>
            <li><a class="dropdown-item" href="insertevent.php">Add Event</a></li>
            <li><a class="dropdown-item" href="manage.php">Manage Users</a></li>
            <li><a class="dropdown-item" href="inventory.php">Manage Inventory</a></li>
          </ul>
        </li>
      </ul>

      <form class="d-flex mx-auto" method = "post" id = "searchBar" action="results.php">
        <input class="form-control me-4" type="text" placeholder="Search" id="search" name = "search" aria-label="Search">
        <input class="btn btn-outline-success" type="submit" value="Search"></button>
      </form>

      <div class="d-flex mx-auto row">
        <div id = "cartSummary" style="display: none;">
          <p id="emaillabel" class="">Log in for purchases!</p>
          <p class = ""><span class="snipcart-items-count"></span> item(s) Total: <span class="snipcart-total-price"></span></p>
          <button class="snipcart-checkout col">View Cart</button>
        </div>
      </div>
      <div class="mr-auto">
        <h5 id="displayname" class="col text-right">Guest User</h5>
        <div id="profilebutton" class="col text-right"><a class="text-decoration-none text-secondary text-right" href="profile.php" role="button">My Profile</a></div>
        <div id="loginbutton" class="col text-right"><a class="text-decoration-none text-secondary text-right" href="login.php" role="button">Log In</a></div>
        <div id="logoutbutton" class="col text-right"><a class="text-decoration-none text-secondary text-right" href="logout.php" role="button">Log Out</a></div>
        <div id="registerbutton" class="col text-right"><a class="text-decoration-none text-secondary text-right" href="register.php" role="button">Register</a></div>
      </div>
    </div>

  </div>

  </div>
  </div>
</nav>