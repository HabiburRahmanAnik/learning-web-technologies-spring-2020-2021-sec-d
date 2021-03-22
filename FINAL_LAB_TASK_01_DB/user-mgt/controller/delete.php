<?php

  require_once('../model/userModel.php');
  $id = $_GET['id'];
 $status =  deleteUser($id);

 if ($status) {
 echo "delete success fully";
 }else{
 	echo "user not delete";
 }

?>