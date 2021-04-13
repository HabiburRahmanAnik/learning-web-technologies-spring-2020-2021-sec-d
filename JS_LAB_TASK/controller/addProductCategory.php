<?php

	require_once('../model/categoryModel.php');

	$categoryName = $_POST['name'];

	if ($categoryName == "") {
		echo "please enter a name";
	}else if (strlen($categoryName) < 4) {
		echo "category name is too short";
	}else{
		$status = insertCategory($categoryName);

		if ($status) {
			echo "Category added successfully";
		}else{
			echo "category not added";
		}
	}



?>