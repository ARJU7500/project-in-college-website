<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>show</title>
	<link rel="stylesheet" href="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<?php
if(isset($_REQUEST['submit']))
{
$a=$_REQUEST['name'];
$b=$_REQUEST['fname'];
$c=$_REQUEST['mname'];
$d=$_REQUEST['email'];
$e=$_REQUEST['dob'];
$f=$_REQUEST['mobile'];
$g=$_REQUEST['anu'];
$h=$_REQUEST['rank'];
$i=$_REQUEST['bname'];
$j=$_REQUEST['net'];
$k=$_REQUEST['gender'];
$l=$_REQUEST['categry'];
$m=$_REQUEST['scategry'];
$n=$_REQUEST['college'];
$o=$_REQUEST['ip'];
$p=$_REQUEST['itip'];
$q=$_REQUEST['bg'];
$r=$_REQUEST['pa'];
$s=$_REQUEST['pc'];
$t=$_REQUEST['sn'];
$u=$_REQUEST['dn'];
$v=$_REQUEST['block'];
$w=$_REQUEST['tehsil'];
$x=$_REQUEST['pa2'];
$y=$_REQUEST['pc2'];
$z=$_REQUEST['sn2'];
$a1=$_REQUEST['dn2'];
$a2=$_REQUEST['block2'];
$a3=$_REQUEST['thsil2'];
$a4=$_REQUEST['10sn'];
$a5=$_REQUEST['p'];
$a6=$_REQUEST['poy'];
$a7=$_REQUEST['ui'];
$a8=$_REQUEST['us'];
echo "<center><table class= 'table table-bordered table-hover table-striped table-responsive-sm'style='margin-top: 40px;'>";
echo"<tr><td>Student Name</td><td>$a</td></tr>";
echo"<tr><td>Father's Name</td><td>$b</td></tr>";
echo"<tr><td>Mother's Name</td><td>$c</td></tr>";
echo"<tr><td>Email Address</td><td>$d</td></tr>";
echo"<tr><td>Date Of Birth</td><td>$e</td></tr>";
echo"<tr><td>Mobile Number</td><td>$f</td></tr>";
echo"<tr><td>Adhar number</td><td>$g</td></tr>";
echo"<tr><td>Rank</td><td>$h</td></tr>";
echo"<tr><td>Branch Name</td><td>$i</td></tr>";
echo"<tr><td>Nationality</td><td>$j</td></tr>";
echo"<tr><td>Gender</td><td>$k</td></tr>";
echo"<tr><td>Category</td><td>$l</td></tr>";
echo"<tr><td>Sub/Category</td><td>$m</td></tr>";
echo"<tr><td>College</td><td>$n</td></tr>";
echo"<tr><td>Highschool Pass ?</td><td>$o</td></tr>";
echo"<tr><td>Intermediate Pass ?</td><td>$p</td></tr>";
echo"<tr><td>ITI Pass?</td><td>$q</td></tr>";
echo"<tr><td>Blood Group</td><td>$r</td></tr>";
echo"<tr><td>Present Address</td><td>$s</td></tr>";
echo"<tr><td>Pin Code</td><td>$s</td></tr>";
echo"<tr><td>State Name</td><td>$t</td></tr>";
echo"<tr><td>District Name</td><td>$u</td></tr>";
echo"<tr><td>Block</td><td>$v</td></tr>";
echo"<tr><td>Tehsil</td><td>$w</td></tr>";
echo"<tr><td>permanent Address</td><td>$x</td></tr>";
echo"<tr><td>Pin Code</td><td>$y</td></tr>";
echo"<tr><td>State Name</td><td>$z</td></tr>";
echo"<tr><td>District Name</td><td>$a1</td></tr>";
echo"<tr><td>Block</td><td>$a2</td></tr>";
echo"<tr><td>Tehsil</td><td>$a3</td></tr>";
echo"<tr><td>10th(School Name)</td><td>$a4</td></tr>";
echo"<tr><td>Per(%)</td><td>$a5</td></tr>";
echo"<tr><td> Pass Out Year</td><td>$a6</td></tr>";
echo"<tr><td>Image</td><td>$a7</td></tr>";
echo"<tr><td>Signature</td><td>$a8</td></tr>";
echo"</table>";}
?>	
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
