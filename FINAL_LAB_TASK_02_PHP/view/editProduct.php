<?php
	require_once('../model/productModel.php');
	$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Product</title>
</head>
<body>
	<form method="POST" action="../controller/edit.php?id=<?php echo $id; ?>">
		<fieldset>
			<legend>EDIT PRODUCT</legend>
			
			<label>Name</label><br>
			<input type="text" name="name" value="<?php 
				$row = getProductById($id);
				echo $row['name'];
			   ?>" required=""><br>
			<label>Buying Price</label><br>
			<input type="text" name="buy" value="<?php 
				$row = getProductById($id);
				echo $row['buyingPrice'];
			   ?>" required=""><br>

			<label>Selling Price</label><br>
			<input type="text" name="sell" value="<?php 
				$row = getProductById($id);
				echo $row['sellingPrice'];
			   ?>" required="">
			<hr>
			<input type="checkbox" name="display" value="<?php 
				$row = getProductById($id);
				echo $row['display'];
			   ?>">Display
			<hr>
			<input type="submit" name="submit" value="save">
		</fieldset>
	</form>
</body>
</html>