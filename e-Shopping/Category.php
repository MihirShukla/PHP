<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
	$con=mysqli_connect("localhost","root","","shopping");
	extract($_GET);
	extract($_POST);
	
	if(isset($category))
	{
		extract($_FILES["catimg"]);
		move_uploaded_file($tmp_name,"images/$name");
		mysqli_query($con,"update category set category='$category',category_image='$name' where ctid=$ctid");
		header("Location:Category.php?ptid=$ptid");
	}
	if(isset($command))
	{
		if($command=='edit')
		{
			$editcat=mysqli_query($con,"select * from category where ctid=$ctid");
			$ecat=mysqli_fetch_assoc($editcat);
			extract($cat);
			
		?>
        <table>
        <form method="post" enctype="multipart/form-data">
        	<tr>
            	<td>category</td>
                <td><input type="text" name="category" id="category" value="<?php echo $category; ?>"/></td>
            </tr>
            <tr>
            	<td colspan="2">
                <label for="catimg">
                <img src="images/<?php echo $category_image;?>" width="100"/>
                </label>
                <input type="file" name="catimg" id="catimg"/>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                <input type="submit" value="Update"/>
                </td>
            </tr>
            </form>
            </table>
            
      <?php
		}
		else if($command=='delete')
		{
			mysqli_query($con,"delete from category where ctid=$ctid");
		}
	}
	
	$rs=mysqli_query($con,"select * from category where ptid=$ptid");
	echo "<table>";
	while($cat=mysqli_fetch_assoc($rs))
	{
		extract($cat);
		echo "<tr>";
		echo "<td>$ctid</td>";
		echo "<td>$category</td>";
		echo "<td>$category_image</td>";
		
		echo "<td><a href='Category.php'?ctid=$ctid&ptid=$ptid&command=edit'><img src='images/edit.png' width='20'/></a></td>";
		
		echo "<td><a href='Category.php'?ctid=$ctid&ptid=$ptid&command=delete'><img src='images/delete.png' width='20'/></a></td>";
		
		echo "<td><a href='addproducttype.php'?ctid=$ctid<img src='images/view.png' width='20'/></a></td>";
		
		echo "</tr>";
	}
	echo "</table>";
	
?>
</body>
</html>
