<?php

	require_once('../model/productModel.php');
	$id = $_GET['id'];

	$status = deleteProduct($id);

    if ($status) {
    	echo "delete successfully";
    }else{
    	echo "product not delete";
    }

?>