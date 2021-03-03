<?php
	
	$title = "Edit Page";
	include('header.php');

	echo $_GET['id'];


?>

	<div id="page_title">
		<h1>Edit User Page</h1>		
	</div>

	<div id="nav_bar">
		
		<a href="user_list.php">Back</a> |		
		<a href="../controller/logout.php">Logout</a>		
	</div>

	<div id="main_content">
		<form method="post" action="">
			<fieldset>
				<legend>Edit User</legend>
				<table>
					<tr>
						<td>Userame</td>
						<td><input type="text" name="name" value="<?php

						include('test.php');
						$id = $_GET['id'];

						foreach($json as $user)
						{
							$i = $user['id'];
							$username = $user['username'];  
						
							if($id == $i){
								echo $username;
							}
						}
						
						 ?>"></td>
					</tr>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value="<?php include("test.php");

						$id = $_GET['id'];
						foreach($json as $user)
						{
							$i = $user['id'];
							$name = $user['name'];  

							if($id == $i){
								echo $name;
							}
						} ?>"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" value="<?php include("test.php");

						$id = $_GET['id'];
						foreach($json as $user)
						{
							$i = $user['id'];
							$email = $user['email'];  
						
							if($id == $i){
								echo $email;
							}
						}?>"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" value="<?php include("test.php"); 
						
						$id = $_GET['id'];
						foreach($json as $user)
						{
							$i = $user['id'];
							$password = $user['password'];  
						
							if($id == $i){
								echo $password;
							}
						}?>"></td>
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