<?php
	session_start();
	if(isset($_SESSION['status'])){

?>
 <!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>

	<table border="1" align="center" width="100%">
 		<tr height="100px">
 			<td width="100px"><img src="images/logo.png"></td>
 			<td align="right">
 				Logged in as
 				<a href="#">Bob</a>|
 				<a href="#">Logout</a>
 			</td>
	 	</tr>
	 	<tr height="200px">
	 		<td>
	 			Account
	 			<ul>
	 				<li><a href="#">Dashboard</a></li>
	 				<li><a href="viewProfile.html">View Profile</a></li>
	 				<li><a href="editProfile.html">Edit Profile</a></li>
	 				<li><a href="profilePicture.html">Chnage Profile Picture</a></li>
	 				<li><a href="changePassword.html">Change Password</a></li>
	 				<li><a href="logout.html">Logout</a></li>
	 			</ul>
	 		</td>
	 		<td><h3>Welcome Bob</h3></td>
	 	</tr>
		<tr height="50px">
			<td colspan="3" align="center">
				copyright@2021
			</td>
		</tr>
	</table>
</body>
</html>

<?php
	}
	else
	{
		header('location:login.html');
	}
?>