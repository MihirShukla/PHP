<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
	$a=array(10,-100,20,-300,50,75,-60);
	array_walk($a,'filter');
	
	function filter($x,$y)
	{
			if($x>0)
			{
				global $q; 
				$q[]=$x;
			}
	}
	print_r($q);

?>
</body>
</html>