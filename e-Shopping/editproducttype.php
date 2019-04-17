<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<?php
		$con=mysqli_connect("localhost","root","","shopping");
		if(isset($_POST["txtpt"]))
		{
			move_uploaded_file($_FILES["txtfile"]["tmp_name"],"".$_FILES["txtfile"]["name"]);
		
			mysqli_query($con,"update product_type set product_type='".$_POST["txtpt"]."',product_type_image='".$_FILES["txtfile"]["name"]."'where ptid=".$_GET["ptid"]);
			
			header("Location:Data.php");
		}
		$rs=mysqli_query($con,"select * from product_type where ptid=".$_GET["ptid"]);
		$d=mysqli_fetch_assoc($rs);
	?>
    <form method="post" enctype="multipart/form-data">
    <label for="txtfile">
    <img src="images/<?php echo $d["product_type_image"];?>" width="100"/>
    </label>
    
    <input type="file" name="txtfile" id="txtfile" style="display:none"/>
    <br/>
    <input type="text" name="txtpt" id="txtpt" value="<?php echo $d["product_type"];?>"/>
    <br/>
    <input type="submit" value="add"/>
    </form>
    </body>
</html>