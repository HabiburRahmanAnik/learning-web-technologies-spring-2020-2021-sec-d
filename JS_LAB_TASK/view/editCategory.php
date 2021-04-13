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
	<link rel="icon" href="../assects/002-planting.png"><title>Edit Product Category</title>
	<link rel="stylesheet" type="text/css" href="dash.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet"  href="../assets/icon/flaticon.css">
   <script type="text/javascript" src="script.js"></script>
</head>
<body>
	<script type="text/javascript">

		window.addEventListener('mouseup',function(e){
			const menu = document.getElementById('menu');
			if (e.target != menu) {
				menu.style.display = 'none';
			}
		});
	</script>

	<?php  include_once('midel.php'); ?>
	
		<div class="side-bar ">
			<?php include_once('link.php'); ?>
		</div>

		<div id="msg" style="display: none;"></div>
		<div class="row-right-product">
			<h1 id="product">Edit Product Category</h1>
			<form method="POST" action="../controller/editCategory.php?id=<?php echo $id;?>" onsubmit = "return editCategoryValidation()">
				<label>Category Name</label><br>
				<input id="name" type="text" name="category" value="<?php  require_once('../model/categoryModel.php');
				$result = getCategoryById($id); echo $result['categoryName']; ?>"><br>
				<label id="lproduct" style="color: red;font-size: .8rem;"></label><br>
				<input id="add_button" type="submit" name="submit" value="save">

			</form>
		</div>

</body>
</html>