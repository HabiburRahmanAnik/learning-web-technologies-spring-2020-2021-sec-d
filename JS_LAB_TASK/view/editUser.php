<?php
 	session_start();
 	if (!$_SESSION['status']) {
 		header('location:login.html');
 	}
 	$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="../assects/002-planting.png"><title>Edit User</title>
	<link rel="stylesheet" type="text/css" href="dash.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script type="text/javascript" src="addUser.js"></script>
   <script type="text/javascript" src="script.js"></script>
   <link rel="stylesheet"  href="../assets/icon/flaticon.css">
</head>
<body>
	
		<?php  include_once('midel.php'); ?>
	
		<div class="side-bar ">
			<?php include('link.php'); ?>
		</div>

		<div id="msg" style="display: none;"></div>
		<div class="row-right">
			<h1 id="user">Edit User</h1>
			<form method="POST" action="../controller/editUser.php?id=<?php echo $id; ?>" onsubmit = "return userValidation()">

				<?php  
					require_once('../model/userModel.php'); 
					$row = getUserByID($id);
				 ?>

				<input id="name" type="text" name="name" placeholder="Name..." value="<?php echo $row['name']; ?>"><br>
				<label id="lname" style="color: red; font-size: .8rem;"></label><br>
				<input id="username"  type="text" name="username" placeholder="Username..." 
					   value="<?php echo $row['username']; ?>"><br>

				<label id="luser" style="color: red; font-size: .8rem;"></label><br>
				<input id="email" type="email" name="email" placeholder="Email..." value="<?php echo $row['email']; ?>"><br>
				<label id="lemail" style="color: red; font-size: .8rem;"></label><br>
				<input id="password" type="password" name="password" placeholder="Password..." 
					   value="<?php echo $row['password']; ?>"><br>

				<label id="lpassword" style="color: red; font-size: .8rem;"></label><br>
				<input id="add_button" type="submit" name="submit" value="save">
				
			</form>
		</div>

		<script>
			window.addEventListener('mouseup',function(e){
				const menu = document.getElementById('menu');
				if (e.target !=menu) {
					menu.style.display = 'none';
				}
			});

			const name = document.getElementById('name');
			const username = document.getElementById('username');
			const email = document.getElementById('email');
			const password = document.getElementById('password');
			const repass = document.getElementById('repass');
			const lname = document.getElementById('lname');
			const luser = document.getElementById('luser');
			const lemail = document.getElementById('lemail');
			const lpassword = document.getElementById('lpassword');

			name.onfocus = function(){
				lname.innerText = "";
				name.style.border = 'none';
				name.style.background = 'white';
			};

			username.onfocus = function(){
				luser.innerHTML = "";
				username.style.border = 'none';
			};
			email.onfocus = function(){
				lemail.innerHTML = "";
				email.style.border = 'none';
			};
			password.onfocus = function(){
				lpassword.innerHTML = "";
				password.style.border = 'none';
			};
		</script>

</body>
</html>

