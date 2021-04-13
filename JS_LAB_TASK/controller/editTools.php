<?php


	if (isset($_POST['submit'])) {
		$toolsName = $_POST['toolsName'];
		$price = $_POST['price'];
		$description = $_POST['desc'];
		$id = $_GET['id'];
		
		require_once('../model/toolsModel.php');
		$status = updateTools($toolsName, $price, $description,$id);

	     if($status){
	    	echo "Tools Update successfully";
	    }else{
	    	echo "Tools not Update";
	    }					
		
	}

?>