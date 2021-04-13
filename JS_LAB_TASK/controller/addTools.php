<?php

	if (isset($_POST['submit'])) {
		$toolsName = $_POST['toolsName'];
		$price = $_POST['price'];
		$description = $_POST['desc'];
		$file_info = $_FILES['tool_img'];


		$ext = explode('.', $file_info['name']);
		$path = '../assets/tools/'.time().'.'.$ext[1];
		

	   $fileName = time().'.'.$ext[1];

		if($ext[1] == 'png' || $ext[1] == 'jpg' || $ext[1] == 'jpeg')
		{

			if($file_info['size'] < 4000000)
			{
				if (move_uploaded_file($file_info['tmp_name'], $path)) 
				{
					require_once('../model/toolsModel.php');
					$status = insertTools($toolsName, $price, $description, $fileName);

	    			 if($status){
	    			 	echo "Tools added successfully";
	    			 }else{
	    			 	echo "Tools not add";
	    			 }
					
					//echo $desc;
					//header('location:../view/addTools.php');
				}
				else{
					echo "error";
				}
			}
			else{
				echo "you file size can't be greater than 4MB";
			}
			
		}
		else{
			echo "png, jpg and jpeg file are allow";
		}
	}



?>