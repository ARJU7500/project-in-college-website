<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Student Profile</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
	<h2 class="text-center bg-dark text-light font-weight-bold">Student Profile</h2>

<div class="container my-4 py-6 ">
<div class="row">
     <div class="col-lg-4 col-md-4 col-12">
  <div class="card" style="width:350px">
    <img class='card-img-top' src='$j' alt='Student image' style='width:100%;height:250px;'>
  </div>
</div>
<div class="col-lg-4 col-md-4 col-12">
  <div class="card" style="width:350px">
    <img class="card-img-top" src="" alt="Student ID" style="width:100%;height:250px;">
  </div>

</div>
<div class="col-lg-4 col-md-4 col-12">
  <div class="card" style="width:350px">
    <img class="card-img-top" src="" alt="Student Signature" style="width:100%;height:250px">
  </div>
</div>
</div>
<?php
{
$a=$_REQUEST['name'];
$b=$_REQUEST['fname'];
$c=$_REQUEST['email'];
$d=$_REQUEST['mobile'];
$e=$_REQUEST['address'];
$f=$_REQUEST['paddress'];
$g=$_REQUEST['Category'];
$h=$_REQUEST['date'];
$i=$_REQUEST['book'];
$j=$_REQUEST['cf'];
$k=$_REQUEST['image'];
$l=$_REQUEST['sign'];
echo "<table class='table table-bordered table-hover table-striped table-responsive-sm'><tbody>";
echo"<tr><td><strong>Student Name</strong></td><td>$a</td></tr>";
echo"<tr><td><strong>Father's Name</strong></td><td>$b</td></tr>";
echo"<tr><td><strong>Email-ID</strong></td><td>$c</td></tr>";
echo"<tr><td><strong>Mobile Number</strong></td><td>$d</td></tr>";
echo"<tr><td><strong>Permanent Home Address</strong></td><td>$e</td></tr>";
echo"<tr><td><strong>Present Address</strong></td><td>$f</td></tr>";
echo"<tr><td><strong>Category</strong></td><td>$g</td></tr>";
echo"<tr><td><strong>Date</strong></td><td>$h</td></tr>";
echo"<tr><td><strong>Reader's Ticket</strong></td><td>$i</td></tr>";
echo "";
echo "";
echo "";
echo"</table>";
}
?>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>