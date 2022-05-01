<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>users</title>
</head>

<body>
	<?php
	$con = mysqli_connect('localhost', 'root', '','users');
	
	$name = $_POST['name'];
	$password = $_POST['password'];
	
	
	$sql = "INSERT INTO 'user'('userNo', 'userName', 'password', 'ordersAmount') VALUES ('0', '$name', '$password', '0');";
	
	$rs = mysqli_query($con, $sql);
	
	if($rs)
	{
		echo "User added.";
	}
	else
	{
		echo "Invalid Details";
	}
	
	?>
</body>
</html>