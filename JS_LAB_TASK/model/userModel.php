<?php

	require_once('db.php');

	function validation($username,$password){
		$conn = getConnection();
		$sql = "select * from users where username = '{$username}' and password = '{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$type = $row['type'];

		if(count($row) > 0){
			return $type;
			return true;
		}else{
			return false;
		}
	}

	function insertUser($name, $username, $email, $password, $type){
		$conn = getConnection();
		$sql = "insert into users values('','{$name}','$username','$email','$password','$type')";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			return true;
		}else{
			return false;
		}
	}
	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from users where id='{$id}'";
		if (mysqli_query($conn, $sql)) {
			return true;
		}else{
			return false;
		}
	}

	function getUserByID($id){
		$conn = getConnection();
		$sql = "select * from users where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}

	function updateUser($id,$name, $username, $email, $password){
		$conn = getConnection();
		$sql = "update users set name = '{$name}', username = '{$username}', email='{$email}', password = '{$password}' where id = '{$id}'";

		if (mysqli_query($conn, $sql)) {
		 	return true;
		 }else{
		 	return false;
		 }

	}

?>