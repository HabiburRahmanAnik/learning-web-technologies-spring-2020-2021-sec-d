<?php

	if(isset($_POST['submit']))
	{
		$name = $_POST['myname'];
		
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