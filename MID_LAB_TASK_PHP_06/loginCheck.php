<?php

	if (isset($_POST['submit'])) {
		$name=$_POST['username'];
		$password=$_POST['password'];
		if($name=="" || $password=="" ){
			echo "Invalid information..please try again";
		}else{
			echo "login successfully";
		}
	}else{
		echo "Invalid request";
	}


?>