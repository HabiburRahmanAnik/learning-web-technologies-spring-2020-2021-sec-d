<?php
	
	$title = "User List Page";
	include('header.php');

?>

	<div id="page_title">
		<h1>User List Page</h1>		
	</div>

	<div id="nav_bar">
		
		<a href="home.php">Back</a> |		
		<a href="../controller/logout.php">Logout</a>		
	</div>

	<div id="main_content">
	
		<table border="1">
			<tr>
				<td>ID</td>
				<td>NAME</td>
				<td>EMAIL</td>
				<td>ACTION</td>
			</tr>
			<tr>
				<td><?php include('test.php'); echo $json[0]['id'];?></td>
				<td><?php include('test.php'); echo $json[0]['username'];?></td>
				<td><?php include('test.php'); echo $json[0]['email'];?></td>
				<td>
					<a href="edit.php?id=1"> EDIT </a> |
					<a href="delete.php?id=1"> DELETE </a> 
				</td>
			</tr>
			<tr>
				<td><?php include('test.php'); echo $json[1]['id'];?></td>
				<td><?php include('test.php'); echo $json[1]['username'];?></td>
				<td><?php include('test.php'); echo $json[1]['email'];?></td>
				<td>
					<a href="edit.php?id=2"> EDIT </a> |
					<a href="delete.php?id=2"> DELETE </a> 
				</td>
			</tr>
			<tr>
				<td><?php include('test.php'); echo $json[2]['id'];?></td>
				<td><?php include('test.php'); echo $json[2]['username'];?></td>
				<td><?php include('test.php');echo $json[2]['email'];?></td>
				<td>
					<a href="edit.php?id=3"> EDIT </a> |
					<a href="delete.php?id=3"> DELETE </a> 
				</td>
			</tr>
		</table>
			
	</div>

<?php include('footer.php') ?>