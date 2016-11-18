
<div class="panel panel-info">
	<div class="panel-heading">
		<a href="../hometask4/certain_post.php?id=<?php echo $id;?>"><h3 class="panel-title"><?php echo htmlentities($post['title']); ?></h3></a>
	</div>
	<div class="panel-body">
		<?php echo htmlentities($post['content']); ?>
	</div>
	<a class = "btn btn-success" href="#" disabled = 'disabled'><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Update</a>
	<!-- <a class = "btn btn-danger" href="../hometask4/remove_post.php?id=<?php echo $id;?>"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Delete</a> -->

	<a class="btn btn-danger" data-toggle="modal" href='#modal-id'><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Delete</a>
	<div class="modal fade" id="modal-id">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Warning!</h4>
				</div>
				<div class="modal-body">
					<?php 
						echo 'Are you sure? Removing this blog is not reversable option!';
					 ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
					<a href='../hometask4/remove_post.php?id=<?php echo $id;?>' class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Delete</a>
				</div>
			</div>
		</div>
	</div>


</div>