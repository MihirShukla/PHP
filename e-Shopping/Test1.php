<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<?php
	if(isset($_POST["txtlname"]))
	{
		if(($_POST["txtfname"])=='')
		{
			print("first must not be empty");
		}
		if(($_POST["txtlname"])=='')
		{
			echo "last must not be empty";
		}
		if(($_POST["txtuname"])=='')
		{
			echo "user must not be empty";
		}
		if(($_POST["txtpwd"])=='')
		{
			echo "pwd must not be empty";
		}
		else{
	$con=mysqli_connect("localhost","root","","ecomm");
	$rs=mysqli_query($con,"insert into signup(firstname,lastname,username,password) values('".$_POST["txtfname"]."','".$_POST["txtlname"]."','".$_POST["txtuname"]."','".$_POST["txtpwd"]."')");
		}
	}
	?>
    <form method="post" action="">
	<label>firstname</label>
        <input type="text" name="txtfname"/><br/>
        <label>lastname</label>
        <input type="txt" name="txtlname"/><br/>
        <label>username</label>
        <input type="text" name="txtuname"/><br/>

		<label>password</label>
        <input type="password" name="txtpwd"/><br/>
        
        <input type="submit" value="submit"/>
    </form>

</body>
</html>