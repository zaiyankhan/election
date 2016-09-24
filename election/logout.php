<?php
session_start();
unset($_SESSION["login_id"]);
$_SESSION["adminlogged_in"] = false; 
unset($_SESSION["name"]);
header("Location: admin.php");
?>