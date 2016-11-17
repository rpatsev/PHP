<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastre</title>
	<link rel = "stylesheet" href="css/reset.css">
	<link rel = "stylesheet" href="css/style.css">
</head>
<?php 

	$a = (isset($_GET['firstname'])) ? $a = $_GET['firstname'] : null;
	$b = (isset($_GET['lastname'])) ? $b = $_GET['lastname'] : null; 
	$c = (isset($_GET['age'])) ? $c = $_GET['age'] : null; 
	$d = (isset($_GET['password'])) ? $d = $_GET['password'] : null; 
	$e = (isset($_GET['control'])) ? $e = $_GET['control'] : null; 
	$conf = (isset($_GET['confirm'])) ? $conf = $_GET['confirm'] : null;

	$error_a = $error_b = $error_c = $error_d = $error_e = $error_conf = null;

include 'verification.php';

?>

<body>
	<header>
		<ul>
			<li>Ola! <a href="#">Entrar</a> ou <a href="#">Cadastre-se</a></li>
			<li><a href="#"><img class="flag" src="img/flag.png" alt="flag">Minhas Ofertas</a></li>
			<li><a href="#">Ajuda</a></li>
			<li><a href="#">Contato</a></li>
			<li><a href="#">Forum</a></li>
			<li><a href="#">Vender</a></li>
			<li><a href="#">Meu YouBike</a></li>
		</ul>
	</header>
	<div class = "background">
		<div class = "form">
			<h1>Cadastre-se</h1>
			<form action="#">
				<fieldset>
					<button class="facebook"></button>
					<div class="line">
						<img src="img/ou.png" alt="line">
					</div>
					<div class="filldata">
						<div>
							<p><?php echo $error_a;?></p>
							<input type="text" name="firstname" value = "<?php echo $a;?>" placeholder="First Name">				
						</div>
						<div>
							<p><?php echo $error_b;?></p>
							<input type="text" name="lastname" value = "<?php echo $b;?>" placeholder="Last Name">
						</div>
						<div>
							<p><?php echo $error_c;?></p>
							<input type="text" name="age" value = "<?php echo $c; ?>" placeholder="Your age" >
						</div>
						<div>
							<p><?php echo $error_d;?></p>	
							<input type="password" name="password" value = "" placeholder="Enter Password" >
						</div>
						<div>
							<p><?php echo $error_conf;?></p>	
							<input type="password" name="confirm" value = "" placeholder="Confirm Password" >
						</div>					
						<div>
							<p><?php echo $error_e;?></p>
							<input type="control" name="control" value = "<?php echo $e; ?>" placeholder="Enter an even double-digit number" >
						</div>
					</div>
					<div>
						<input type ="checkbox" id="send_updates">			
						<label for="send_updates">Send me Yourbike updates and tips</label>
					</div>
					<div class="create">			
						<button type="submit">Create my account</button>
					</div>
					<div class ="terms">
						<p>By clicking the button above, you agree to the Terms of Service</p>
						<p>View our privacy policy</p>

					</div>
				</fieldset>
			</form>
		</div>
	</div>
</body>
</html>