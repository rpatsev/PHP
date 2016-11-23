<?php 
session_start();
$users = [];
$data = file_get_contents('users');
$data_unserialized = unserialize($data);
if ($data_unserialized) {
	$users = $data_unserialized;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username = $_POST['Login'];
	$pwd = $_POST['Password'];
	$user = null;
		foreach ($users as $u) {
			//var_export($u);
			if ($username === $u['username']) {
				$user = $u;
				break;
			}
		}
		if ($user === null){
			echo 'User not valid';
		} else {
			if ($pwd === $u['password']){
				$_SESSION['user'] = $u['username'];
				header('Location: ../hometask4/index.php');
				//exit();
			} else {
			echo 'Password incorrect';
			}
		}
	}		

$action2 = "Login";
require 'header.php';
require 'autorization.php';
require 'footer.php';

?>