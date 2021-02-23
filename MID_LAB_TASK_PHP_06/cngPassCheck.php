<?php
 	if(isset($_POST['submit'])){
 		$currenttPass=$_POST['currenttPass'];
 		$newPass=$_POST['newPass'];
 		$retypePass=$_POST['retypePass'];

 		if ($currenttPass=="" || $newPass="" || $retypePass="") {
 			echo "Null submossion";
 			
 		}else if ($currenttPass == $newPass) {
 			echo "new password and old password can't be same"; 

 		}else if($newPass != $retypePass) {
 			echo "password doesn't match";

 		}else{
 			echo "login successfully";
  	 		}
 		}



?>