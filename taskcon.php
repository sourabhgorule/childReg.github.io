<?php

$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo"not connected";
}
if(!mysqli_select_db($con,'children'))
{
	echo"databse not selected";
}
$c_id=$_POST['c_id'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$status=$_POST['status'];
$dob=$_POST['dob'];
$height=$_POST['height'];
$weight=$_POST['weight'];

$sql="INSERT INTO child(c_id,sex,age,prof_status,dob,height,weight) values('$c_id','$gender','$age','$status','$dob','$height','$weight')";

if(!mysqli_query($con,$sql))
{
	echo"not inserted";
}
else
{
	echo"inserted successfully";
}
header("refresh:3; url=task02.html")
?>