<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<!--<form method="post">
    	<input type="text" name="txtyear"/>
        <input type="submit" value="submit"/>
    </form>-->
    <?php/*
		if(isset($_POST["txtyear"]))
				$a=$_POST["txtyear"];
		{
			if($a%4==0)
			{
				echo "leap year";		
			}
			else
			{
				echo "leap year1";		
			}
		}
	*/ ?>
    <?php
		if(Date("L"))
		{
			echo "Leap Year";
		}
		else
		{
			echo "not a leap Year";
		}
			
	?>
</body>
</html>