<?php 

include 'database.php';

 ?>


 <form action="#">
	<?php foreach ($fields as $field) { 
		$name = $field['name'];
		$type = $field['type'];
		$value = $field['value'];
		?>
		<div>
			<!-- <?php echo ucfirst($name); ?> -->
			<input type="<?php echo $type; ?>" name ="<?php echo $name; ?>" placeholder = "<?php echo ucfirst($name); ?>" value = "<?php if(isset($value)){echo $value;} ?>" >
		</div>
	<?php } ?>	
 	<input type="submit" value="Save">
 	

 </form>