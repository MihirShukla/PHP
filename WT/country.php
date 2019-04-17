<html>
    <head>
    </head>
    <body>
        <form method="post">
            name:<input type="text" name="txtname" id="txtname"/><br/>
            area:<input type="text" name="txtarea" id="txtarea"/><br/>
            population:<input type="text" name="txtpopulation" id="txtpopulation"/><br/>
            <input type="submit" value="submit" onclick=test()/>
        </form>
    </body>    
</html>
<?php
    $con=mysqli_connect("localhost","root","");
    mysqli_query($con,"CREATE DATABASE Country");
    $con1=mysqli_connect("localhost","root","","Country");
    mysqli_query($con1,"CREATE TABLE City(id INT,name VARCHAR(50),area VARCHAR(50),population INT)");
    $count=0;
    if(isset($_POST["txtname"]))
    {
        $count=mysqli_query($con1,"insert into city (name,area,population)values('".$_POST["txtname"]."','".$_POST["txtarea"]."','".$_POST["txtpopulation"]."')");
    }
if($count>0)
{

    $rs=mysqli_query($con1,"select * from city");
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>"."name"."</th>";
	echo "<th>"."area"."</th>";
	echo "<th>"."population"."</th>";
	echo "</tr>";
    while($rows=mysqli_fetch_assoc($rs))
    {
        echo "<tr>";
        echo "<td>".$rows["name"]."</td>";
        echo "<td>".$rows["area"]."</td>";
        echo "<td>".$rows["population"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
}

?>
