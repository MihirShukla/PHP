<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<?php
		$con=mysql_connect("localhost","root","","shopping");
		$rs=mysql_query("select * from users",$con);
		while($row=mysql_fetch_assoc($result))
		{
			echo $row[1];
		}
	?>
</body>
</html>