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
mysqli_select_db($con,'icondata1');
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$mobile= $_REQUEST['mobile'];
$mgs = $_REQUEST['mgs'];
$query ="insert into iconinfo1 (name ,email,mobile,message)values('$name','$email','$mobile','$mgs') ";
mysqli_query($con,$query);
header('location:contact.php');
?>