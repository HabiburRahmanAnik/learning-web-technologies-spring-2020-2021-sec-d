<!DOCTYPE html>
<html>
<head>
	<title>Date of birth Input</title>
</head>
<body>
	<form method="post" action="#">
		<fieldset>
				<legend><b>DATE OF BIRTH</b></legend>
					<table>
						<tr>
							<td>
								<i>dd</i>
							</td>
							<td>
								<i>mm</i>
							</td>
							<td>
								<i>yy</i>
							</td>
						</tr>

						<tr>
							<td>
								<input type="text"  name="day" size="5" value="<?php if(isset($_POST['day'])){ echo $_POST['day'];} ?>">/
							</td>
							<td>
								<input type="text" size ="5" name="mn" value="<?php if(isset($_POST['mn'])){ echo $_POST['mn'];} ?>">/
							</td>
							<td>
								<input type="text" size="5" name="yr" value="<?php if(isset($_POST['yr'])){ echo $_POST['yr'];} ?>">
							</td>
							
						</tr>

					</table>
					<hr>
					<input type="Submit" name="submit" value="submit">
						
						
			</fieldset>



	</form>
	
</body>
</html>
