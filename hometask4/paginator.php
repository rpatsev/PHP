
<?php require 'paginator_logic.php'; ?>

<ul class="pagination">
	<li><?php if ($page > 1 ): ?>
		<a href="../hometask4/index.php?page=<?php echo $page-1; ?>">&laquo;</a>	
	<?php endif ?>
	</li>
	<?php if ($page>4): ?>
		<li><a href="#">...</a></li>
	<?php endif ?>
	<?php foreach (range($page-3, $page+3) as $i){ ?>
		<li>
			<a href="../hometask4/index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
		</li>
	<?php } ?>
	<?php if (($page+3)<$max_page): ?>
		<li><a href="#">...</a></li>
	<?php endif ?>
	<li>
		<?php if ($page < $max_page): ?>
		<li>
			<a href="../hometask4/index.php?page=<?php echo $page+1; ?>">&raquo;</a>
		</li>
		<?php endif ?>
	</li>
</ul>

<?php  var_export($i);     ?>

