<?php

	require_once('../model/categoryModel.php');

	$categoryName = $_POST['category'];
	$id = $_REQUEST['id'];


	if ($categoryName == '') {
		echo "Please enter category name";
	}elseif (strlen($categoryName) < 4) {
		echo "category name is  too short";
	}else{

		$status = updateCategory($categoryName,$id);
		if ($status) {
			echo "Edit successfully";
		}else{
			echo "Not edit";
		}
	}

?>