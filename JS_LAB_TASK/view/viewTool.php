<?php

	$title = 'View Tools';
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

		<div class="tables">
			<table>
				<tr>
					<th>Name</th>
					<th>Price</th>
					<th>Description</th>
					<th>Image</th>
					<th>Action</th>
				</tr>
				<?php

				require_once('../model/toolsModel.php');
				
				$row = getAllTools();

				foreach ($row as  $value) { echo "<tr>"; ?>
					
					<td><?php echo $value['name']; ?></td>
					<td><?php echo $value['price']; ?></td>
					<td><?php echo $value['description']; ?></td>
					<td><?php echo "<img src='../assets/tools/".$value['img']."' width='100px'";  ?></td>
					
					<td>
						<button id="edit-button"><a href="editTools.php?id=<?php echo $value['id']; ?>">Edit</a></button>
						<button  id="delete-button" onclick =  deleteCategory()><a href="deleteTools.php?id=<?php echo $value['id']; ?>">Delete</a></button>
					</td>

				<?php echo "</tr>"; } ?>
			</table>
		</div>

</body>
</html>