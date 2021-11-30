<?php
    session_start();
    unset($_SESSION['loggedIn']);
    unset($_SESSION['email']);
    unset($_SESSION['role']);
    session_destroy();
    header("Location: login.php");
    
?>