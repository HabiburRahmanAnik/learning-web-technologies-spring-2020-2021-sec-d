<?php

	if (isset($_POST['submit']))
	{
		$name     = $_POST['name'];
		$email    = $_POST['email'];
		$username = $_POST['username'];
		$pass = $_POST['password'];
		$conPass  = $_POST['conpass'];
		$gender   = $_POST['gender'];
		$day      = $_POST['day'];
		$month    = $_POST['mn'];
		$year     = $_POST['yr'];


		if($name != "" || $email != "" || $username != "" || $pass != "" || $conPass != "" || $day != "" || $month != "" || $year = "")
		{
			if (!preg_match('/^[a-zA-Z. 0-9]{2,}$/', $name)) {
				echo "name containt at least 2 character and alpha numeric number and space";
			}
			elseif (!preg_match("/^[a-zA-Z0-9-_]{2,}$/", $username)) 
			{
				echo "username containt at least 2 character and  alpha numeric characters,period,dash and underscore";
			}
			elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				echo "Invalid email format";
			}
			
			else
			{
				if(empty($gender)){
				echo "gender is required";
				}
				elseif($pass != $conPass)
				{
					echo "password and confirm password doesn't match";
				}else{

					$uper=preg_match("#[A-Z]+#", $pass);
		 			$lower=  preg_match("#[a-z]+#", $pass);
		 			$number=preg_match("#[0-9]+#", $pass);
			 			$special=preg_match("#[\W]+#", $pass);
					if(!$uper || !$lower || !$number || !$special || strlen($pass)<8){
						echo "password containt al least one number,upercase,lowercase,special character and more than 8 character";
					}else{
						echo "Register Successfully";
					}
				}
			}
		}
		else{
			echo "Null submition";
		}

	}
	else
	{
		echo "Invalid request";
	}



?>