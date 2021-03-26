<?php

// Inialize session
include("../connect.php");

// Delete certain session
unset($_SESSION['uname']);

session_destroy();

// Jump to login page
header('Location:../index.php');

?>