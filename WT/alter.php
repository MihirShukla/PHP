<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<?php
		$con=mysqli_connect("localhost","root","");
		mysqli_query($con,"CREATE DATABASE mihir");
		$con1=mysqli_connect("localhost","root","","mihir");
		mysqli_query($con1,"CREATE TABLE mihs(id INT,name VARCHAR(20),enroll INT,sem INT)");
		
		mysqli_query($con1,"alter table mihs add cgpa INT");
		
		$a=mysqli_query($con1,"INSERT INTO mihs(id,name,enroll,sem,cgpa) values ('1','Mihir','54','6','9')");
		if($a>0)
		{
			echo "successful";
		}
		
		
	?>
</body>
</html>