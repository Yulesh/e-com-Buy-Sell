<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>item</title>
</head>

<body>
	<?php
	$con = mysqli_connect('localhost', 'root', '','item');
	
	$category = $_POST['category'];
	$name = $_POST['name'];
	$itempicture = $_POST['itempicture'];
	$color = $_POST['color'];
	$price = $_POST['price'];
	
	
	$sql = "INSERT INTO 'item'('itemId', 'category', 'item', 'image', 'color', 'price') VALUES ('0', '$category', '$name', '$itempicture', '$color', '$price');";
	
	$rs = mysqli_query($con, $sql);
	
	if($rs)
	{
		echo "Item added.";
	}
	else
	{
		echo "Invalid Details";
	}
	
	?>
	
</body>
</html>