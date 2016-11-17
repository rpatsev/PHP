<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculator</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
	$a = $b = $c = $res = $error = null;

	if (isset($_GET['firstnum'])) {
		$a = $_GET['firstnum'];
}

	if (isset($_GET['secondnum'])) {
		$b = $_GET['secondnum'];
	}

	if (isset($_GET['operator'])) {
		$c = $_GET['operator'];
	}

		if ($c=="+"){
			$res = $a + $b;
		} elseif ($c=="-"){
			$res = $a - $b;
		} elseif ($c=="*"){
			$res = $a * $b;
		} elseif ($c=="/"){
			if ($b != 0){
			$res = $a / $b;
			}
			else $error = "Sorry, division by zero is not allowed!!!";
		} elseif ($c=="^"){
			$res=1;
			for ($i=0;$i<$b;$i++){
				$res*=$a; 
			}
		}

		if ($a != is_numeric($a) || $b != is_numeric($b)) {
		
			$res = null;
			$error = "Insert number only";
		} 

?>

	<div class="wrapper">
		<div class="calc">
			<form action="#" method="GET">
				<div class="data">
					<input type="text" name="firstnum" value="<?php echo $a; ?>" required>
					<select name="operator" id="">
						<option value="<?php echo $c; ?>"><?php echo $c; ?></option>
						<option value="+">+</option>
						<option value="-">-</option>
						<option value="*">*</option>
						<option value="/">/</option>
						<option value="^">^</option>
					</select>
					<input type="text" name="secondnum" id="" value="<?php echo $b; ?>" required>			
				</div>
				<div class="eq">
					<input type="submit" value="=">				
				</div>
				<div class="result">
					<?php
						echo htmlentities($a);
						echo " ";
						echo htmlentities($c);
						echo " ";
						echo htmlentities($b);
					?>
						<hr>
						<h1> 
						<?php 
						echo $res;
						echo "<br>";
						echo $error;
						?> 
						</h1>
				</div>
			</form>
		</div>
	</div>
</body>
</html>