<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="post" action="loginCheck.php">
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>User Name: </td>
					<td>
						<input type="text" name="username" value=""
						pattern="(?=.*[a-z])(?=.*(A-Z)(?.*[0-9]).{-/_}" required>
					</td>
				</tr>
				<tr>
					<td>Password : </td>
					<td>
					 <input type="Password" name="password" value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[#,%,@,$]).{8,}" title="Must contain at least one of the special characters(@,#,$,%,$), and at least 8 or more characters" required>
					</td>
				</tr>
				</table>
				<input type="checkbox" name="check" value="">Remember Me
				<hr>
				<input type="submit" name="submit" value="submit">
				<a href="#">Forgot Password?</a>
		</fieldset>
	</form>

</body>
</html>