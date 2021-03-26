<?php
session_start();
if(!isset($_SESSION['login']))     //if session not found redirect to homepage
{
header('Location:login.php');

}
unset($_SESSION['uname']);       // Session Found Unset the variable values
session_destroy();                  // Destroy the session
header('Location:login.php');

?>