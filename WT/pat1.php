<?php

$i=1;
$ch=97;
 for($r=1; $r<=5; $r++)
 {
  for($c=1; $c<=$r; $c++)
  {
    if($r%2==0){
       echo chr($ch);
	   $ch++;}
    else
       echo $i;
	   $i++;
  }
 	echo "<br/>";
 }	
?>
