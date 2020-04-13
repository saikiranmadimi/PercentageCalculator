<?php
 $Regid=$_POST["Regid"];
 $sub1 =$_POST["Hindi"];
 $sub2 =$_POST["English"];
 $sub3 =$_POST["Maths"];
 $sub4 =$_POST["Science"]; 
 $sub5 =$_POST["Socialstudies"];
 $sum=$sub1+$sub2+$sub3+$sub4+$sub5; 
 $avg=$sum/500;
 $percent=$avg*100;
 echo "<font size=4><center>Total marks:-".$sum."</center><br>"; 
 echo "<font size=4><center>percentage is:-".$percent."</center>";

?>

