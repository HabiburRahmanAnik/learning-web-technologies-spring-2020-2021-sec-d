<?php

	require_once('../model/userModel.php');
	$id = $_GET['id'];

	if(isset($_POST['submit'])){

		$user = [ 

					'name'       => $_POST['name'],
					'username'   => $_POST['username'],
					'email'      => $_POST['email'],
					'password'   => $_POST['password'],
					'type'       =>'user'
		        ];

		$status = updateUser($user,$id);
		if($status){
			echo " Updated successfully";
		}else{
			echo "User not update";
		}
	}


?>