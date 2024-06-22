<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"hello");
$ins="insert into details values('gulzar','mohammad')";
$res=mysqli_query($con,$ins);
if($res)
{
	echo("details inserted seccessfully");
}
?>