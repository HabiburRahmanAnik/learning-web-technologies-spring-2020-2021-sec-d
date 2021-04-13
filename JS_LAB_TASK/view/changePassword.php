<?php

	$title = 'Change Password';
	include_once('header.php');
	$id = $_SESSION['id'];

?>
<body style="background-color: white;">

		<div id="show-text" style="display: none;" ></div>
		<div class="side-bar ">
			<?php include('link.php'); ?>
		</div>

		<div class="changePassword">
			<h1 style="font-weight: normal;font-size: 1.4rem; margin-bottom: 40px;">Change Password</h1>
			<form onsubmit="return passwordVlidation()" method="POST" action="../controller/changePassword.php?id=<?php echo $id; ?>">
				
				<input type="password" name="currentPass" id="currentPass" placeholder="Current Password.."><br>
				<label id="lcurrent" style="color: red;font-size: .8rem;"></label><br>
				
				<input type="password" name="newPassword" id="newPass" placeholder="New Password.."><br>
				<label id="lnew" style="color: red;font-size: .8rem;"></label><br>
				<input type="password" name="retypePassword" id="retypePass" placeholder="Retype new.."><br>
				
				<label id="lretype" style="color: red;font-size: .8rem;"></label><br>
				<div id="password-container" style="padding: 30px 0px;">
					<button style="margin-right: 30px;"><a href="viewProfile.php">Cancel</a></button>
					<input id="button" type="submit" name="submit" value="Save">
				</div>
			</form>
		</div>

		<script>
			const currentPass = document.getElementById('currentPass');
			const newPass = document.getElementById('newPass');
			const retypePass = document.getElementById('retypePass');
			const lcurrent = document.getElementById('lcurrent');
			const lnew = document.getElementById('lnew');
			const lretype = document.getElementById('lretype');

			function passwordVlidation(){
				if (currentPass.value.trim() === '' || currentPass.value.trim() == null) {
					lcurrent.innerHTML = "*Current password can't be empty";
					currentPass.style.border = "1px solid red";
					return false;
				}else if(newPass.value.trim() === '' || newPass.value.trim() == null){
					lnew.innerHTML = "*new password can't be empty";
					newPass.style.border = "1px solid red";
					return false;
				}else if(newPass.value.length < 6){
					lnew.innerHTML = "*password contain at least 6 character";
					newPass.style.border = "1px solid red";
					return false;
				}else if(!newPass.value.includes('$')  && !newPass.value.includes('&') 
						&& !newPass.value.includes('#') && !newPass.value.includes('@')){
					newPass.style.border = '1px solid red';
					lnew.innerHTML = "*password contain at least one special character";
					return false;

				}else if(newPass.value != retypePass.value){
					lnew.innerHTML = "*new and Retype password does't match";
					newPass.style.border = "1px solid red";
					return false;
				}


			}

			currentPass.onfocus = function(){
				lcurrent.innerHTML = "";
				currentPass.style.border = "1px solid black";
			};
			newPass.onfocus = function(){
				lnew.innerHTML = "";
				newPass.style.border = "1px solid black";
			};

		</script>
</body>
</html>

			

