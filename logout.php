<?php

// Inialize session
include("connect.php");

// Delete certain session
unset($_SESSION['Name']);

session_destroy();

// Jump to login page
header('Location:login.php');

?>