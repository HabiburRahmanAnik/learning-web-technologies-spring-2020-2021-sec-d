<?php
	
	session_start();
	if (isset($_POST['submit'])) {
		$current = $_POST['currentPass'];
		$new = $_POST['newPassword'];
		$retype = $_POST['retypePassword'];

		$currentPassword = $_SESSION['password'];
		
		if($current == '' || $new == "" || $retype == ""){
			echo "please fillup all required form";
		}
		else if(strlen($new) < 6 || strlen($current) < 6){
			echo "password can't be less than 6 character";
		}elseif ($currentPassword == $new) {
			echo "current and new password can't be same";
		}elseif ($new != $retype) {
			echo "password doesn't match";
		}else{
			
		}

		

	}

?>