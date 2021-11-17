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
mysqli_select_db($con,'grvdata');
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$mobile= $_REQUEST['mobile'];
$gs = $_REQUEST['gs'];
$query ="insert into grvinfo (name ,email,mobile,grievances)values('$name','$email','$mobile','$gs') ";
mysqli_query($con,$query);
header('location:grices.php');
?>