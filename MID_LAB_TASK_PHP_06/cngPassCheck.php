<?php
 	if(isset($_POST['submit'])){
 		$currenttPass=$_POST['currenttPass'];
 		$newPass=$_POST['newPass'];
 		$retypePass=$_POST['retypePass'];

 		if (empty($currenttPass) || empty($newPass) || empty($retypePass)) {
 			echo "Null submossion";
 		}
 		elseif($currenttPass == $newPass)
 		{
 			echo "current and new password must be different";
 		}
 		elseif($newPass != $retypePass)
 		{
 			echo "new password and re-type password doesn't match";
 		}
 		else
 		{
 			echo "Password change successfully";	
 		}

 	}

 		
?>