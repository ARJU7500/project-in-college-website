<?php

$con= mysqli_connect('localhost','root','');
if($con)
{
	echo"this is done";
}
else
{
	echo"this ain't done";
}
mysqli_select_db($con,'ikit1');
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$mobile= $_REQUEST['mobile'];
$subject = $_REQUEST['subject'];
$comments = $_REQUEST['comments'];
$query ="insert into ikitinfo (name ,email,mobile,subject,comments)values('$name','$email','$mobile','$subject','$comments') ";
echo "$query";
mysqli_query($con,$query);
header('location:index.php');
?>