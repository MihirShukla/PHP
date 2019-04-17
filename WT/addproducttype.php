<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<?php
	if(isset($_POST["txtpt"]))
    {
    	echo "<h1>mihir</h1>";
		move_uploaded_file($_FILES["txtfile"]["tmp_name"],"images/".$_FILES["txtfile"]["name"]);
		$con=mysqli_connect("localhost","root","","shopping");
		echo "<h1>mihir</h1>";
		mysqli_query($con,"insert into product_type(product_type,product_type_image) values ('".$_POST["txtpt"]."','".$_FILES["txtfile"]["name"]."')");
		echo "<h1>mihir</h1>";
		header("Location:Data.php");
	}
	?>
	
	<form method="post" enctype="multipart/form-data" action="">
	<input type="file" name="txtfile" id="txtfile"/>
	<br/>
	<input type="text" name="txtpt" id="txtpt"/>
	<br/>
	<input type="submit" value="add"/>
	</form>
</body>
</html>