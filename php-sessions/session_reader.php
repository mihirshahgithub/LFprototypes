<?php
header('location: session_setter.php');
$errors=$_SESSION['errors'];
print_r($_POST);
$_SESSION['value']=$_POST;
print_r($_SESSION);
?>