<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Apply Book</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid bg-light">
  <div class="row">
  <div class="col-lg-2 col-md-2 col-12">
    <center><img src="imgs/logo2.png"class="img-fluid"style="margin-top: 15px;"></center>
  </div>
  <div class="col-lg-10 col-md-10 col-12">
  <center><h1 style="color:RGB(0, 0, 128);">S.S.S.S.S.Ram Singh Bisht Government Polytechnic</h1>
  <h4 style="color:RGB(0, 0, 128);">Dwarahat (Almora),Uttrakhand</h4>
  <p style="color:RGB(0, 0,0);"> An institute of government of Uttrakhand</p></center>
  </div>
</div>
</div>
<!------------------------------------------------------navbar------------------------------------------------->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">GPDwarahat</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupported" aria-controls="navbarSupported" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarSupported">
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item active">
        <a class="nav-link" href="alldata.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="conshow.php">Contact Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kitshow.php">Keep in tuoch Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gricesshow.php">Grievance</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="alumnishow.php">Alumni</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="applybookshow.php">Apply Library Book</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="applybhostelshow.php">Apply Boy's Hostel </a>
</li>
<li class="nav-item">
        <a class="nav-link" href="applyghostelshow.php">Apply Girls's Hostel </a>
</li>
    </ul>
  </div>
</nav>
<?php
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con,'applybooklib');
if(isset($_REQUEST['serch']))
{
$s=$_REQUEST['scr'];
 $q="select * from librarybook where name='$s'"; 
 $rs=mysqli_query($con,$q);
echo"<table class= 'table table-bordered table-hover table-striped table-responsive-sm'style='margin-top: 40px;'>
    <thead>
      <tr>
        <th colspan=13 class='text-center bg-dark text-light font-weight-bold'>The List Of Apply Library Book Student's</th>
      </tr>
      <tr>
        <th colspan=13 class='text-center bg-light font-weight-bold'>
        <form class='form-inline'>
    <input class='form-control mr-sm-2' type='text' name='scr'placeholder='Search Student' autocomplete='off'required/>
    <button class='btn btn-success' type='submit' name='serch'>Search</button>
  </form>
</th>
</tr>
    </thead>";
    echo" <tbody>
      <tr>
        <td><strong>S. No.</strong></td>
        <td><strong>Student ID Card</strong></td>
        <td><strong>Student Name</strong></td>
        <td><strong>Father's Name</strong></td>
        <td><strong>Email Address</strong></td>
        <td><strong>Phone</strong></td>
        <td><strong>Branch</strong></td>
        <td><strong>Year/Semester</strong></td>
         <td><strong>permanent home address</strong></td>  
        <td><strong>persent address</strong></td>
        <td><strong>Category</strong></td>
        <td><strong>date</strong></td>
        <td><strong>Reader's Ticket(Book Name)</strong></td>
      </tr>";
while($r=mysqli_fetch_array($rs))
{
echo" <tr>
        <td><strong>$r[0].</strong></td>
        <td><img src='imgs/$r[12]'height='90'width='150'></td>
        <td>$r[1]</td>
        <td>$r[2]</td>
        <td>$r[3]</td>
        <td>$r[4]</td>
        <td>$r[5]</td>
        <td>$r[6]</td>
        <td>$r[7]</td>
        <td>$r[8]</td>
        <td>$r[9]</td>
        <td>$r[10]</td>
        <td>$r[11]</td>
      </tr>";
    
}
echo" </tbody>
</table>"; 
}
else
{
  $q="select * from librarybook";
$rs=mysqli_query($con,$q);
echo"<table class= 'table table-bordered table-hover table-striped table-responsive-sm 'style='margin-top: 40px;'>
    <thead>
      <tr>
        <th colspan=13 class='text-center bg-dark text-light font-weight-bold'>The List Of Apply Library Book Student's</th>
      </tr>
      <tr>
        <th colspan=13 class='text-center bg-light font-weight-bold'>
        <form class='form-inline'>
    <input class='form-control mr-sm-2' type='text' name='scr'placeholder='Search Student' autocomplete='off'required/>
    <button class='btn btn-success' type='submit' name='serch'>Search</button>
  </form>
</th>
</tr>
    </thead>";
    echo" <tbody>
      <tr>
        <td><strong>S. No.</strong></td>
        <td><strong>Student ID Card</strong></td>
        <td><strong>Student Name</strong></td>
        <td><strong>Father's Name</strong></td>
        <td><strong>Email Address</strong></td>
        <td><strong>Phone</strong></td>
        <td><strong>Branch</strong></td>
        <td><strong>Year/Semester</strong></td>
         <td><strong>permanent home address</strong></td>  
        <td><strong>persent address</strong></td>
        <td><strong>Category</strong></td>
        <td><strong>date</strong></td>
        <td><strong>Reader's Ticket(Book Name)</strong></td> 
      </tr>";
while($r=mysqli_fetch_array($rs))
{
echo" <tr>
        <td><strong>$r[0].</strong></td>
        <td><img src='imgs/$r[12]'height='90'width='150'></td>
        <td>$r[1]</td>
        <td>$r[2]</td>
        <td>$r[3]</td>
        <td>$r[4]</td>
        <td>$r[5]</td>
        <td>$r[6]</td>
        <td>$r[7]</td>
        <td>$r[8]</td>
        <td>$r[9]</td>
        <td>$r[10]</td>
        <td>$r[11]</td>
      </tr>";
    
}
echo" </tbody>
</table>";
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