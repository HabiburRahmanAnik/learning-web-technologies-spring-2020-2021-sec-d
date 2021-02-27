<?php
	if (isset($_POST['submit'])) {
		$name=$_POST['username'];
		$password=$_POST['password'];
		
		if($name != "" && $password != "")
		{
			if(!preg_match('/^[a-zA-Z0-9-_]{2,}$/', $name))
			{
				echo "username containtat least 2 character  and alpha numeric characters,period,dash and underscore";

			}else{
				$uper=preg_match("#[A-Z]+#", $password);
	 			$lower=  preg_match("#[a-z]+#", $password);
	 			$number=preg_match("#[0-9]+#", $password);
		 			$special=preg_match("#[\W]+#", $password);
				if(!$uper || !$lower || !$number || !$special || strlen($password)<8){
					echo "password containt al least one number,upercase,lowercase,special character and more than 8 character";
				}else{
					echo $password."<br>";
				}
			}
			
		}else
		{
			echo "null submission";
		}
		
	}

?>