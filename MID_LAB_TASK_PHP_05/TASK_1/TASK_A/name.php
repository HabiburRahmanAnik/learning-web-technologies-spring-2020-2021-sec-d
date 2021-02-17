<?php

	$name = $_POST['myname'];

	if(isset($_POST['submit']))
	{
		if($name == ""){
			echo "null submission";
		}
		else{
			echo "sucssfully submit";
		}
	}else{
		echo "Invalid request";
	}

?>