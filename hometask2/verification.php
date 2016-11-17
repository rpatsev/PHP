<?php 

// $error_a = $error_b = $error_c = $error_d = $error_e = $error_conf = null;

	if (strlen($a) < 4) {
		$error_a = "Too short name";
	} elseif (strlen($a) > 12){
		$error_a = "Too long name";
	} elseif ($a != ctype_alpha($a)) {
		$error_a = "Your name can include letters only";
	} elseif ($a !== ucfirst($a)) {
		$error_a = "Your name should begin with capital letter";
	}

	if (strlen($b) < 4){
		$error_b = "Too short surname";
	} elseif (strlen($b) > 12){
		$error_b = "Too long surname";
	} elseif ($b != ctype_alpha($b)) {
		$error_b = "Your surame can include letters only";
	} elseif ($b !== ucfirst($b)) {
		$error_b = "Your surname should begin with capital letter";
	}

	if ($c != ctype_digit($c)){
		$error_c = "Warning! Digits only";
	} elseif ($c < 18){
		$error_c = "Sorry, content for adults only 18+";
	} elseif ($c > 100) {
		$error_c = "Sorry, an age limit is 100";
	}

	
	if ($d != ctype_alnum($d)){
		$error_d = "You password can contain numbers and letters only";
	} elseif (strlen($d) < 6){
		$error_d = "Your password must have at least 6 characters";
	} elseif (strlen($d) > 20){
		$error_d = "Your password can be 20 characters maximum";
	}


	if ($conf != $d) {
		$error_conf = "The passwords are different";
	}

	
	if ($e != ctype_digit($e)){
		$error_e = "Warning! Digits only";
	} elseif ($e < 10 || $e > 100) {
		$error_e = "double-digit number!";
	} elseif ($e % 2 != 0) {
		$error_e = "Even number!";
	}

 ?>