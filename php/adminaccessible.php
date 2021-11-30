<?php
// NOTE: "isset" returns a boolean, without it will be the $_SESSION value itself.
  if (!isset($_SESSION['loggedIn'])) {
      header("Location: index.php");
      exit;
  } 
?>
