<?php 
session_start();
/*	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		$login = $_POST['Login'];
		$pwd = $_POST['Password'];
		if ($login) {
			$_SESSION['Login'] = $login;		
		} else {
			$_SESSION['Login'] = null;	
		if ($pwd) {
			$_SESSION['Password'] = $pwd;
		} else {
			$_SESSION['Password'] = null;
		}
		header('Location: ../hometask4/index.php');
	}
*/

	if (isset($_SESSION['Login'])){
		$user = $_SESSION['Login'];
	} else {
		$user = "Guest";
	}
require 'header.php';
require 'autorization.php';

require 'footer.php';

?>