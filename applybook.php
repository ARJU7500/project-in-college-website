<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Application Form for Library Membership</title>
	<link rel="stylesheet"href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script type="text/javascript">
  function libsn()
{
var a=document.getElementById("sn").value;
if (a=="")
document.getElementById("sn").style.border=" 2px solid red";
else
document.getElementById("sn").style.border="";
}

function libfn()
{
var a=document.getElementById("fn").value;
if (a=="")
document.getElementById("fn").style.border=" 2px solid red";
else
document.getElementById("fn").style.border="";
}


function libem()
{
var a=document.getElementById("e").value;
if (a=="")
document.getElementById("e").style.border=" 2px solid red";
else
document.getElementById("e").style.border="";
}
function libmn()
{
var a=document.getElementById("m").value;
if (a=="")
document.getElementById("m").style.border=" 2px solid red";
else
document.getElementById("m").style.border="";
}

function libbranch()
{
var a=document.getElementById("branch").value;
if (a=="")
document.getElementById("branch").style.border=" 2px solid red";
else
document.getElementById("branch").style.border="";
}
function libyrsem()
{
var a=document.getElementById("yrsem").value;
if (a=="")
document.getElementById("yrsem").style.border=" 2px solid red";
else
document.getElementById("yrsem").style.border="";
}
function libadd()
{
var a=document.getElementById("add").value;
if (a=="")
document.getElementById("add").style.border=" 2px solid red";
else
document.getElementById("add").style.border="";
}
function libpadd()
{
var a=document.getElementById("padd").value;
if (a=="")
document.getElementById("padd").style.border=" 2px solid red";
else
document.getElementById("padd").style.border="";
}
function libcat()
{
var a=document.getElementById("c").value;
if (a=="")
document.getElementById("c").style.border=" 2px solid red";
else
document.getElementById("c").style.border="";
}

function libdate()
{
var a=document.getElementById("d").value;
if (a=="")
document.getElementById("d").style.border=" 2px solid red";
else
document.getElementById("d").style.border="";
}
function libid()
{
var a=document.getElementById("customFile").value;
if (a=="")
document.getElementById("customFile").style.border=" 2px solid red";
else
document.getElementById("customFile").style.border="";
}
function libbook()
{
var a=document.getElementById("book").value;
if (a=="")
document.getElementById("book").style.border=" 2px solid red";
else
document.getElementById("book").style.border="";
}
</script>
</head>
<body>

	<h1>Application Form for Library Membership</h1>
<hr class="bg-dark mb-4 md-0 d-inline-block mx-auto"style="width: 60%;height:3px;">  

<div class="w-50 m-auto">
<form action="applybookinfo.php" method="post"enctype="multipart/form-data">
<div class="form-group ">
  <label><strong>Student Name</strong></label>
<input type="text" name="sname" id="sn" onBlur="libsn()"placeholder="Plase Enter Your Name"autocomplete="off"class="form-control" required/>
</div>
<div class="form-group ">
  <label>Father'S Name</label>
<input type="text" name="fname" id="fn" onBlur="libfn()"placeholder="Plase Enter Your Father's Name"autocomplete="off"class="form-control" required/>
</div>
<div class="form-group">
  <label>Email-ID</label>
<input type="email" name="email" onBlur="libem()" id="e"placeholder="Plase Enter Your Email-ID"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>Mobile Number</label>
<input type="number" name="mobile" onBlur="libmn()"id="m"placeholder="Plase Enter Your Mobile Number"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>Branch</label>
<input type="text" name="branch"id="branch"onBlur="libbranch()" placeholder="Enter Your Branch Name"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>Year/Semster</label>
<input type="text" name="yersem"id="yrsem"onBlur="libyrsem()" placeholder="Year/semster"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>permanent home address</label>
<input type="text" name="phaddress"id="add"onBlur="libadd()" placeholder="Plase Enter Your Address"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>persent address</label>
<input type="text" name="paddress"id="padd"onBlur="libpadd()" placeholder="Your Present Address"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>Category</label>
  <input type="text"class="form-control" onBlur="libcat()"id="c"name="cate"placeholder="Category"required/>
</div>
<div class="form-group">
  <label>Date</label>
  <input type="date"class="form-control" onBlur="libdate()"id="d"name="date"placeholder="day-month-year"required/>
</div>
<div class="form-group">
  <label>Reader's Ticket</label>
  <input type="text"class="form-control" onBlur="libbook()"id="book"name="book"placeholder="Book Name"required/>
  <p style="color:red;">**(For all Student) 2 Books for 15 days</p>
</div>
<div class="custom-file">
   <label class="custom-file-label" for="customFile">Upload Your I Card Image</label>
    <input type="file" onBlur="libid()" name="cf"class="custom-file-input" id="customFile">
  </div><br><br>
<button type="submit" name="submit"class="btn btn-primary">Submit <i class="fas fa-angle-double-right mr-2"></i></button>
</form>
</div>
	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
</body>
</html>