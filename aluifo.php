<?php
if(isset($_REQUEST['submit']))
{
$name=$_REQUEST['aname'];
$branch=$_REQUEST['branch'];
$rn=$_REQUEST['rn'];
$poy=$_REQUEST['poy'];
$email=$_REQUEST['email'];
$mn=$_REQUEST['mn'];
$cp=$_REQUEST['cp'];
$im=$_FILES['cf']['name'];
$type=$_FILES['cf']['type'];
$size=$_FILES['cf']['size'];
$path=$_FILES['cf']['tmp_name'];
if(move_uploaded_file($_FILES['cf']['tmp_name'],"imgs/$im"))
{
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'alumnistudata');
$q="insert into alumnistuinfo(name,branch,rn,poy,email,mn,cp,image) values('$name','$branch','$rn','$poy','$email','$mn','$cp','$im')";
$x=mysqli_query($con,$q);
if($x>0)
{
header('location:alumni.php');
}
else
echo"Sorry Sir Plase Try Agian";
}
}
?>