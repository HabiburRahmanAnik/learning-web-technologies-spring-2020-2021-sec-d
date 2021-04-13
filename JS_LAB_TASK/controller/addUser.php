<?php

	$name = $_REQUEST['name'];
	$username = $_REQUEST['username'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	$id = $_GET['id'];

	if ($name == '') {
		echo "name can't be empty";
	}elseif (strlen($name) <3) {
		echo "name is too short";
	}
	else if (strlen($name) > 40) {
		echo "name is too long";
	}
	else if ($username == '') {
		echo "username can't be empty";
	}elseif (strlen($username) < 3) {
		echo "username is too short";
	}elseif (strlen($username) > 40) {
		echo "username is too long";
	}else if ($email == '') {
		echo "email can't be empty";
	}elseif ($password == '') {
		echo "password can't be empty";
	}elseif(strlen($password) <6){
		echo "password contain at least 6 character";
	}
	else{
		require_once('../model/userModel.php');
		$result = insertUser($id,$name,$username,$email,$password,$type);
		if ($result) {
			echo "User added Successfully";
		}else{
			echo "Error Occur";
		}
	}
?>