<?php

	$title = 'Edit Profile';
	include_once('header.php');

?>
<body style="background-color: white">
	
		<div class="side-bar ">
			<?php include('link.php'); ?>
		</div>

		<div class="editProfile">
			<img src="../assets/user.png" width="200px"><br>
			<button id="changeProfilePicture"><a href="changeProfilePicture.php" style="color: black;">change Profile Picture</a></button>
			<div id="edit-containt">
				<form method="POST" onsubmit = "return profileValidation()">
					<input id="name1" type="text" name="name" placeholder="Name..." value="<?php echo $_SESSION['name']; ?>"><br>	
					<label id="lname" style="color: red; font-size: .8rem;"></label><br>
					<input id="username1" type="text" name="username" placeholder="username..." value="<?php echo $_SESSION['username']; ?>"><br>
					<label id="luser" style="color: red; font-size: .8rem;"></label><br>
					<input id="email1" type="email" name="email" placeholder="Email..." value="<?php echo $_SESSION['email']; ?>"><br>
					<label id="lemail" style="color: red; font-size: .8rem;"></label><br>
					<div style="padding: 30px 0px;">
						<button style="margin-right: 30px;"><a href="viewProfile.php">Cancel</a></button>
						<input id="button" type="submit" name="submit" value="Save">
					</div>
				</form>
			</div>
		</div>	

		<script>

			const name = document.getElementById('name1');
			const username = document.getElementById('username1');
			const email = document.getElementById('email1');
			const lname = document.getElementById('lname');
			const luser = document.getElementById('luser');
			const lemail = document.getElementById('lemail');

			function profileValidation(){

				if (name.value.trim() == "" || name.value.trim() == null) {
					name.style.border = '1px solid red';
					lname.innerHTML = "*name can;t be empty";
					return false;
				}else if(name.value.length < 3){
					name.style.border = '1px solid red';
					lname.innerHTML = "*name is too short";
					return false;
				}
				else if(name.value.length > 40){
					name.style.border = '1px solid red';
					lname.innerHTML = "*name is too long";
					return false;

				}else if(username.value.trim() == "" || username.value.trim() == null){
					username.style.border = '1px solid red';
					luser.innerHTML = "username can't be empty";
					return false;

				}else if(username.value.length < 3){
					name.style.border = '1px solid red';
					luser.innerHTML = "*username is too short";
					return false;

				}else if(username.value.length > 40){
					name.style.border = '1px solid red';
					luser.innerHTML = "*username is too long";
					return false;
				}
				else if(email.value.trim() =="" || email.value.trim() == null){
					email.style.border = '1px solid red';
					lemail.innerHTML = "*email can't be empty";
					return false;

				}
				else{

				}
			}
			name.onfocus = function(){
				lname.innerText = "";
				name1.style.border = '1px solid black';
			};

			username.onfocus = function(){
				luser.innerHTML = "";
				username.style.border = '1px solid black';
			};
			email.onfocus = function(){
				lemail.innerHTML = "";
				email.style.border = '1px solid black';
			};
		</script>
</body>
</html>