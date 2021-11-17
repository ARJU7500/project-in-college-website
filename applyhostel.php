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
  function hossn()
{
var a=document.getElementById("sn").value;
if (a=="")
document.getElementById("sn").style.border=" 2px solid red";
else
document.getElementById("sn").style.border="";
}

function hosfn()
{
var a=document.getElementById("fn").value;
if (a=="")
document.getElementById("fn").style.border=" 2px solid red";
else
document.getElementById("fn").style.border="";
}
function hosmn()
{
var a=document.getElementById("mn").value;
if (a=="")
document.getElementById("mn").style.border=" 2px solid red";
else
document.getElementById("mn").style.border="";
}
function hosem()
{
var a=document.getElementById("e").value;
if (a=="")
document.getElementById("e").style.border=" 2px solid red";
else
document.getElementById("e").style.border="";
}
function hosm()
{
var a=document.getElementById("m").value;
if (a=="")
document.getElementById("m").style.border=" 2px solid red";
else
document.getElementById("m").style.border="";
}
function hoswn()
{
var a=document.getElementById("wn").value;
if (a=="")
document.getElementById("wn").style.border=" 2px solid red";
else
document.getElementById("wn").style.border="";
}
function hosbranch()
{
var a=document.getElementById("branch").value;
if (a=="")
document.getElementById("branch").style.border=" 2px solid red";
else
document.getElementById("branch").style.border="";
}
function hosyrsem()
{
var a=document.getElementById("yrsem").value;
if (a=="")
document.getElementById("yrsem").style.border=" 2px solid red";
else
document.getElementById("yrsem").style.border="";
}
function hosadd()
{
var a=document.getElementById("add").value;
if (a=="")
document.getElementById("add").style.border=" 2px solid red";
else
document.getElementById("add").style.border="";
}
function hosdis()
{
var a=document.getElementById("dis").value;
if (a=="")
document.getElementById("dis").style.border=" 2px solid red";
else
document.getElementById("dis").style.border="";
}
function hosst()
{
var a=document.getElementById("st").value;
if (a=="")
document.getElementById("st").style.border=" 2px solid red";
else
document.getElementById("st").style.border="";
}
function hosdate()
{
var a=document.getElementById("d").value;
if (a=="")
document.getElementById("d").style.border=" 2px solid red";
else
document.getElementById("d").style.border="";
}
function hosim()
{
var a=document.getElementById("customFile").value;
if (a=="")
document.getElementById("customFile").style.border=" 2px solid red";
else
document.getElementById("customFile").style.border="";
}
</script>
</head>
<body>

	<h1>Application Form For Hostel</h1>
<hr class="bg-dark mb-4 md-0 d-inline-block mx-auto"style="width: 40%;height:3px;">  

<div class="w-50 m-auto">
<form action="applyhostelinfo.php" method="post"enctype="multipart/form-data">
<div class="form-group ">
  <label><strong>Student Name</strong></label>
<input type="text" name="sname" id="sn" onBlur="hossn()"placeholder="Plase Enter Your Name"autocomplete="off"class="form-control" required/>
</div>
<div class="form-group ">
  <label>Father'S Name</label>
<input type="text" name="fname" id="fn" onBlur="hosfn()"placeholder="Plase Enter Your Father's Name"autocomplete="off"class="form-control" required/>
</div>
<div class="form-group ">
  <label>Mother'S Name</label>
<input type="text" name="mname" id="mn" onBlur="hosmn()"placeholder="Plase Enter Your Mother's Name"autocomplete="off"class="form-control" required/>
</div>
<div class="form-group">
  <label>Email-ID</label>
<input type="email" name="email" onBlur="hosem()" id="e"placeholder="Plase Enter Your Email-ID"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>Mobile Number</label>
<input type="number" name="mnu" onBlur="hosm()"id="m"placeholder="Plase Enter Your Mobile Number"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>Whatsapp Number</label>
<input type="number" name="wnu" onBlur="hoswn()"id="wn"placeholder="Plase Enter Your Whatsapp Number"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>Branch</label>
<input type="text" name="branch"id="branch"onBlur="hosbranch()" placeholder="Enter Your Branch Name"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>Year/Semster</label>
<input type="text" name="yersem"id="yrsem"onBlur="hosyrsem()" placeholder="Year/semster"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>permanent home address</label>
<input type="text" name="address"id="add"onBlur="hosadd()" placeholder="Plase Enter Your Address"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>District</label>
<input type="text" name="dis"id="dis"onBlur="hosdis()" placeholder="Your District"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>State</label>
  <input type="text"class="form-control" onBlur="hosst()"id="st"name="st"placeholder="Your State"required/>
</div>
<div class="form-group">
  <label>Date</label>
  <input type="date"class="form-control" onBlur="hosdate()"id="d"name="date"placeholder="day-month-year"required/>
</div>
<div class="custom-file">
   <label class="custom-file-label" for="customFile">Upload Your Image</label>
    <input type="file" onBlur="hosim()" name="cf"class="custom-file-input" id="customFile">
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