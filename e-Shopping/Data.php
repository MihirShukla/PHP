<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<form action="addproducttype.php">
    	<input type="submit" value="add product type"/>
    </form>
    
    <?php
	$con=mysqli_connect("localhost","root","","shopping");
	$rs=mysqli_query($con,"select * from product_type");

	echo "<table>";
	while($a=mysqli_fetch_assoc($rs))
	{
		echo "<tr>";
		echo "<td>".$a["ptid"]."</td><td>".$a["product_type"]."</td><td>".$a["product_type_image"]."</td>";
		
		echo "<td><a href='editproducttype.php?ptid=".$a["ptid"]."'><img src='images/edit.png' width='20'/></a></td>";
		
		echo "<td><a href='delproducttype.php?ptid=".$a["ptid"]."'><img src='images/delete.png' width='20'/></a></td>";
		
		echo "<td><a href='Category.php?ptid=".$a["ptid"]."'><img src='images/view.png' width='20'/></a></td>";
		
	
	}
		echo "</table>";
	?>
</body>
</html>