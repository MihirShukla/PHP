<?php 
$server = "localhost"; 
$username = "root"; 
$createdb = "CREATE DATABASE IF NOT EXISTS test1"; 
$link = mysqli_connect($server, $username, ""); 
mysqli_query($link,$createdb); 
$createtable = "CREATE TABLE IF NOT EXISTS `test1`.`operation` ( `id` INT(5) NOT NULL AUTO_INCREMENT , `name` VARCHAR(5) NOT NULL , PRIMARY KEY (`id`))"; 
mysqli_select_db($link,"test1" ); 
mysqli_query($link,$createtable ); 
?> 
<form method="post"> 
Name:<input type="text" name="uname"/><br/> 
<input type="submit" name="submit" value="submit"/> 
</form> 
<?php 
if(isset($_POST["submit"])){ 
mysqli_query($link, "INSERT INTO operation(name) VALUES('".$_POST['uname']."')"); 
} 
$select = mysqli_query($link, "SELECT * FROM operation"); 
while ($row = mysqli_fetch_assoc($select)) { 
echo $row['name']."<br/>"; 
} 
?>

<form method="post"> 
<br><br>Alter Column : <input type="text" name="column"/> 
<input type="submit" name="submita" value="submit"/> 
</form> 
<?php 
if(isset($_POST["submita"])){ 
mysqli_query($link,"ALTER TABLE operation ADD COLUMN IF NOT EXISTS ".$_POST['column']." VARCHAR(20)"); 
} 
?> 
<form method="post"> 
<br/><br/>Update Table<br/> 
Name <input type="text" name="aname"> 
Sem <input type="text" name="sem"> 
<input type="submit" name="submitu" value="submit"> 
</form> 
<?php 
if(isset($_POST["submitu"])){ 
mysqli_query($link, "UPDATE `operation` SET `name` = '".$_POST['aname']."' WHERE `operation`.`sem` = ".$_POST['sem'] ); 
} 
mysqli_close($link); 
?> 
</body> 
</html>
