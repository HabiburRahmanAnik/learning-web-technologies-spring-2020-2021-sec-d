<?php
	
	session_start();
	require_once('../model/userModel.php');

	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$conn = getConnection();
		$sql = "select * from users where username = '{$username}' and password = '{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$type = $row['type'];

		if ($result &&  $type == 'admin') {
			$_SESSION['id'] = $row['id'];
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			$_SESSION['email'] = $row['email'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['status'] = true;
			header('location:../view/dashboard.php');
 		}
 		else{
 			echo "Invalid User";
 		}
	}

?>