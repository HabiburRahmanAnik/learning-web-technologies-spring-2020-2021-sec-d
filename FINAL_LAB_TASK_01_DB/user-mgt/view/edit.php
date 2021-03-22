<?php
	
	$title = "Edit Page";
	include('header.php');
	require_once('../model/userModel.php');
	echo $_GET['id'];
	$id = $_GET['id'];

?>

	<div id="page_title">
		<h1>Edit User Page</h1>		
	</div>

	<div id="nav_bar">
		
		<a href="user_list.php">Back</a> |		
		<a href="../controller/logout.php">Logout</a>		
	</div>

	<div id="main_content">
		<form method="post" action="../controller/edit.php?id=<?php echo $id; ?>">
			<fieldset>
				<legend>Edit User</legend>
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" value="<?php 
							
							$row = getUserByID($id);
							echo   $row['username'];
						
						?>"></td>
					</tr>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value="<?php 
							$row = getUserByID($id);
							echo   $row['name'];
						
						?>"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" value="<?php 
							$row = getUserByID($id);
							echo   $row['email'];
						?>"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" value="<?php 
							$row = getUserByID($id);
							echo   $row['password'];
						
						?>"></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Update">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>

<?php include('footer.php') ?>