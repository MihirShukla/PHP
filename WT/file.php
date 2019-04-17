<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<form method="post">
    <input type="text" name="txt"/>
    <input type="submit" value="submit"/>
    </form>
	<?php
		if(isset($_POST["txt"]))
		{
			$file=fopen("demo.txt","a");
			$x=$_POST["txt"];
			fwrite($file,$x);
			
			
			if(file_exists("demo.txt"))
			{
				$data=file("demo.txt");
				$size=filesize("demo.txt");
				
				for($i=0;$i<$size;$i++)
				{
					
					echo $data[$i];
					
				}
			}
			fclose($file);
		}
	?>
</body>
</html>