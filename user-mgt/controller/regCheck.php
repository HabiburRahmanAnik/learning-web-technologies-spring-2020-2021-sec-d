<?php
	session_start();

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$repass 	= $_POST['repass'];

		if($username == "" || $name == "" || $email == "" || $password == ""){
			echo "invalid information...please try again!";
		}else{

			if($password == $repass){

				$user = [
							'id'		=>"1", 
							'name'		=>$name, 
							'username'	=>$username, 
							'email'		=>$email, 
							'password'	=>$password
						];

				$_SESSION['abc'] = $user;

				$myfile = fopen('../model/users.json', 'r');
				$data = fread($myfile, filesize('../model/users.json'));
				$json = json_decode($data, true);
				array_push($json, $user);

				$myfile = fopen('../model/users.json', 'w');
				$write = json_encode($json, JSON_PRETTY_PRINT );
				fwrite($myfile, $write);
				
				header('location: ../view/login.html');
			}else{
				echo "password & re-type password mismatch...";
			}
		}
	}
?>