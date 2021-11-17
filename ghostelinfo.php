<?php
if(isset($_REQUEST['submit']))
{
$name=$_REQUEST['sname'];
$fname=$_REQUEST['fname'];
$mname=$_REQUEST['mname'];
$email=$_REQUEST['email'];
$mobile=$_REQUEST['mnu'];
$wnum=$_REQUEST['wnu'];
$branch=$_REQUEST['branch'];
$yrsem=$_REQUEST['yersem'];
$address=$_REQUEST['address'];
$dis=$_REQUEST['dis'];
$state=$_REQUEST['st'];
$date=$_REQUEST['date'];
$image=$_FILES['cf']['name'];
$type=$_FILES['cf']['type'];
$size=$_FILES['cf']['size'];
$path=$_FILES['cf']['tmp_name'];
if(move_uploaded_file($_FILES['cf']['tmp_name'],"imgs/$image"))
{
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'applyghostel')or die("enable to connect server line 22");
$q="insert into ghostelstudent(name,fname,mname,email,mobile,wnumber,branch,yrsem,address,district,state,date,image) 
values('$name','$fname','$mname','$email','$mobile','$wnum', 'branch','$yrsem','$address','$dis','$state','$date','$image')";
$x=mysqli_query($con,$q);
if($x>0)
{
header('location:applyhostel.php');
}
else
echo"Sorry Sir Please Try Agian not connect to database";
}
}
