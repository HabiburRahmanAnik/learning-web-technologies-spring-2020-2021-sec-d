<?php

	$title = 'Users List';
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

		<div class="user-table">
			<table>
				<tr>
					<th>Name</th>
					<th>Username</th>
					<th>Email</th>
					<th>Password</th>
					<th>Action</th>
				</tr>
				<?php

				require_once('../model/userModel.php');
				
				$row = getAllUser();

				foreach ($row as  $value) { echo "<tr>"; ?>
					
					<td><?php echo $value['name']; ?></td>
					<td><?php echo $value['username']; ?></td>
					<td><?php echo $value['email']; ?></td>
					<td><?php echo $value['password']; ?></td>
					
					<td>
						<button id="edit-button"><a href="editUser.php?id=<?php echo $value['id']; ?>">Edit</a></button>
						<button  id="delete-button"><a href="deleteUser.php?id=<?php echo $value['id']; ?>">Delete</a></button>
					</td>

				<?php echo "</tr>"; } ?>
			</table>
		</div>

</body>
</html>