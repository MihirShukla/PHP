<?php
    $con=mysqli_connect("localhost","root","","test");
    $rs=mysqli_query($con,"select * from student");
    echo "<table border='1'>";
	echo "<tr>";
	echo "<th>"."id"."</th>";
	echo "<th>"."name"."</th>";
	echo "<th>"."enroll"."</th>";
	echo "<th>"."cgpa"."</th>";
	echo "</tr>";
    while($a=mysqli_fetch_assoc($rs))
    {
        echo"<tr>";
        echo "<td>".$a["id"]."</td>";
        echo "<td>".$a["name"]."</td>";
        echo "<td>".$a["enroll"]."</td>";
        echo "<td>".$a["cgpa"]."</td>";
        echo "</tr>";
    }
echo "</table>";


?>