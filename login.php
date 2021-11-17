<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Login</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
<h1 class="bg-dark text-center text-white">Admin Login</h1><hr>  
<div class="w-50 m-auto bg-light">
<form method="post" style="margin-top: 50px;">
<div class="form-group">
  <label>Email-ID</label>
<input type="text" name="email" placeholder="Email address"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>Password</label>
<input type="password" name="pass" placeholder="Password"autocomplete="off"class="form-control"required/>
</div>
<button type="submit" name="submit"class="btn btn-primary">Login</button>
</form>
</div>
<?php
if(isset($_REQUEST['submit']))
{
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'signdata');
$e = $_REQUEST['email'];
$p = $_REQUEST['pass'];
$q="select * from signinfo where email='$e' && password='$p'";
$rs=mysqli_query($con, $q);
$x=mysqli_num_rows($rs);
if($x>0)
{
	header('location:alldata.php');
}
else
{
echo "<h4 class='text-center bg-light w-50 m-auto'>Email and password is't match plase <a href='as.php'>signup</a></h4>";
}}
?>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	
</body>
</html>