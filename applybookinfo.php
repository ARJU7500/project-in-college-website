<?php
if(isset($_REQUEST['submit']))
{
$name=$_REQUEST['name'];
$fname=$_REQUEST['fname'];
$email=$_REQUEST['email'];
$mobile=$_REQUEST['mobile'];
$branch=$_REQUEST['branch'];
$yrsem=$_REQUEST['yrsem'];
$address=$_REQUEST['address'];
$paddress=$_REQUEST['paddress'];
$category=$_REQUEST['cate'];
$date=$_REQUEST['date'];
$book=$_REQUEST['book'];
$im=$_FILES['cf']['name'];
$type=$_FILES['cf']['type'];
$size=$_FILES['cf']['size'];
$path=$_FILES['cf']['tmp_name'];
if(move_uploaded_file($_FILES['cf']['tmp_name'],"imgs/$im"))
{
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'applybooklib')or die("enable to connect server line 22");
$q="insert into librarybook(name,fname,email,mobile,branch,yrsem,
address,paddress,category,date,book,im) values('$name','$fname',
'$email','$mobile','$branch','$yrsem','$address','$paddress',
'$category','$date','$book','$im')";
$x=mysqli_query($con,$q);
if($x>0)
{
header('location:applybook.php');
}
else
{
echo"Sorry Sir Plase Try Agian";}
}
}
?>