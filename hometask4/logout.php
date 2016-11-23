<?php 

session_start();

$_SESSION['user'] = null;
header('Location: ../hometask4/index.php');

 ?>