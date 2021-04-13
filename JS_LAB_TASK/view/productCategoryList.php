<?php

	$title = 'Product Category List';
	include_once('header.php');

?>
<body>

	<script>
		window.addEventListener('mouseup',function(e){
			const menu = document.getElementById('menu');
			if (e.target !=menu) {
				menu.style.display = 'none';
			}
		})
	</script>
	
	<?php  include_once('midel.php'); ?>
	
		<div class="side-bar ">
			<?php include('link.php'); ?>
		</div>

		<div id="product-table">
			<table>
				<tr>
					<th>Name</th>
					<th>Action</th>
				</tr>

				<?php

				require_once('../model/categoryModel.php');
				
				$row = getAllCategory();

				foreach ($row as  $value) { echo "<tr>"; ?>
					
					<td><?php echo $value['categoryName'];  ?></td>
					<td>
						<button id="edit-button"><a href="editCategory.php?id=<?php echo $value['id']; ?>">Edit</a></button>
						<button  id="delete-button" onclick =  deleteCategory()><a href="deleteCategory.php?id=<?php echo $value['id']; ?>"></a>Delete</button>
					</td>

				<?php echo "</tr>"; } ?>
			</table>
		</div>

</body>
</html>