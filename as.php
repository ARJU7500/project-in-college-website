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
<h1 class="bg-dark text-center text-white">Signup Here</h1> 
<div class="w-50 m-auto bg-light">
<form method="post" style="margin-top: 50px;">
	<div class="form-group">
  <label>Admin Name</label>
<input type="text" name="name" placeholder="Admin Name"autocomplete="off"class="form-control"required/>
</div>
	<div class="form-group">
  <label>Email-ID</label>
<input type="text" name="email" placeholder="Email address"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>Designation</label>
<input type="text" name="design" placeholder="Designation"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>Branch</label>
<input type="text" name="branch" placeholder="Branch Name"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>Mobile Number</label>
<input type="text" name="mobile" placeholder="Mobile Number"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>Password</label>
<input type="password" name="pass" placeholder="Password"autocomplete="off"class="form-control"required/>
</div>
<button type="submit" name="submit"class="btn btn-primary">Signup</button>
</form>
</div>
<?php
if(isset($_REQUEST['submit']))
{
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'signdata');
$n = $_REQUEST['name'];
$e = $_REQUEST['email'];
$d = $_REQUEST['design'];
$b = $_REQUEST['branch'];
$m = $_REQUEST['mobile'];
$p = $_REQUEST['pass'];
$pass=password_hash($p, PASSWORD_BCRYPT);
$q="insert into signinfo(name, email, design, branch, mobile, password)value('$n','$e','$d','$b','$m','$p')";
$x=mysqli_query($con, $q);
if($x>0)
{
	header('location:login.php');
}
else
{
echo "<h4 class='text-center bg-light w-50 m-auto'>plase Try Agian</h4>";
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