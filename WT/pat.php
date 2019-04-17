<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<?php  
$k=1;  
	for($i=0;$i<5;$i++){  
	for($j=0;$j<=$i;$j++){  
	if($j%2!=0)  
	{  
		$k=0;  
	}  
	else   
{  
$k=1;  
}  
echo $k." ";  
}  
echo "<br>";  
}  
?> 
</body>
</html>