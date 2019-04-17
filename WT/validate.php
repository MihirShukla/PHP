<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<form method="post">
    	Email:<input type="email" name="txtemail"/>
        <input type="submit" value="submit"/>
    </form>
	<?php
	if(isset($_POST["txtemail"]))
	{
		$a=$_POST["txtemail"];
		$x="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/";
		if(preg_match($x,$a))
		{
			echo "successful";
		}
		else
		{
			echo "failure";
		}

	}
	?>
</body>
</html>