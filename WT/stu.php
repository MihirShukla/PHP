<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<form method="post">
    	name:<input type="text" name="txtnm"/><br/>
        enroll:<input type="text" name="txten"/><br/>
        sem:<input type="text" name="sem"/><br/>
        percentage:<input type="text" name="percentage"/><br/>
        <input type="submit" value="submit"/>
    </form>
	<?php
		if(isset($_POST["txtnm"]))
		{
			echo "<table border='1'>";
			echo "<tr>";
				echo "<th>"."name"."</th>";
				echo "<th>"."enroll"."</th>";
				echo "<th>"."sem"."</th>";
				echo "<th>"."percentage"."</th>";
			echo "</tr>";
			echo "<tr>";
				echo "<td>".$_POST["txtnm"]."</td>";
				echo "<td>".$_POST["txten"]."</td>";
				echo "<td>".$_POST["sem"]."</td>";
				echo "<td>".$_POST["percentage"]."</td>";
			echo "</tr>";
			echo "</table>";
		}
	?>
</body>
</html>