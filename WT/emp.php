<?php
    $con=mysqli_connect("localhost","root","","test");
    $rs=mysqli_query($con,"select * from employee order by experience");
	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>"."id"."</th>";
	echo "<th>"."job_title"."</th>";
	echo "<th>"."experience"."</th>";
	echo "</tr>";
    while($a=mysqli_fetch_assoc($rs))
    {
        echo"<tr>";
        echo "<td>".$a["id"]."</td>";
        echo "<td>".$a["job_title"]."</td>";
        echo "<td>".$a["experience"]."</td>";
    }
echo "</table>";
?>