 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Group Fee Structure</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet"href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script type="text/javascript">
  function kitun()
{
var a=document.getElementById("n").value;
if (a=="")
document.getElementById("n").style.border=" 2px solid red";
else
document.getElementById("n").style.border="";
}
function kitem()
{
var b=document.getElementById("e").value;
if (b=="")
document.getElementById("e").style.border=" 2px solid red";
else
document.getElementById("e").style.border="";
}
function kitmn()
{
var c=document.getElementById("m").value;
if (c=="")
document.getElementById("m").style.border=" 2px solid red";
else
document.getElementById("m").style.border="";
}
function fb()
{
var d=document.getElementById("fb").value;
if (d=="")
alert("plase fill the div";)
document.getElementById("fb").style.border=" 2px solid red";
else
document.getElementById("fb").style.border="";
}
function f1()
{
var e=document.getElementById("inputGroupSelect01").value;
if (e=="")
document.getElementById("inputGroupSelect01").style.border=" 2px solid red";
else
document.getElementById("inputGroupSelect01").style.border="";
}
function f2()
{
var f=document.getElementById("inputGroupSelect01").value;
if (f=="")
document.getElementById("inputGroupSelect01").style.border=" 2px solid red";
else
document.getElementById("inputGroupSelect01").style.border="";
}
function f3()
{
var g=document.getElementById("inputGroupSelect01").value;
if (g=="")
document.getElementById("inputGroupSelect01").style.border=" 2px solid red";
else
document.getElementById("inputGroupSelect01").style.border="";
}
function f4()
{
var h=document.getElementById("inputGroupSelect01").value;
if (h=="")
document.getElementById("inputGroupSelect01").style.border=" 2px solid red";
else
document.getElementById("inputGroupSelect01").style.border="";
}
function f5()
{
var i=document.getElementById("inputGroupSelect01").value;
if (i=="")

document.getElementById("inputGroupSelect01").style.border=" 2px solid red";
else
document.getElementById("inputGroupSelect01").style.border="";
}
function f6()
{
var j=document.getElementById("inputGroupSelect01").value;
if (j=="")
document.getElementById("inputGroupSelect01").style.border=" 2px solid red";
else
document.getElementById("inputGroupSelect01").style.border="";
}
function f7()
{
var k=document.getElementById("inputGroupSelect01").value;
if (k=="")
document.getElementById("inputGroupSelect01").style.border=" 2px solid red";
else
document.getElementById("inputGroupSelect01").style.border="";
}
function f8()
{
var l=document.getElementById("inputGroupSelect01").value;
if (l=="")
document.getElementById("inputGroupSelect01").style.border=" 2px solid red";
else
document.getElementById("inputGroupSelect01").style.border="";
}
</script>
</head>
<body>
<h1>Student Feedback</h1>
<hr class="bg-dark mb-4 md-0 d-inline-block mx-auto"style="width: 25%;height:3px;">  
<div class="w-50 m-auto">
<form method="post">
<div class="form-group ">
  <label>Student Name</label>
<input type="text" name="name" id="n" onBlur="kitun()"placeholder="Plase Enter Your Name"autocomplete="off"class="form-control" required/>
</div>
<div class="form-group">
  <label>Email-ID</label>
<input type="email" name="email" onBlur="kitem()" id="e"placeholder="Plase Enter Your Email-ID"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>Mobile Number</label>
<input type="number" name="mobile" onBlur="kitmn()"id="m"placeholder="Plase Enter Your Mobile Number"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>Branch</label>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Select</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" id="fb"onBlur="fb()">
    <option selected>Branch...</option>
    <option>Computer Science & Engineering</option>
    <option>Information Technology</option>
    <option>Electronics Engineering</option>
    <option>Civil Engineering</option>
    <option>Pharmacy</option>
    <option>MOM&SP</option>
  </select>
</div>
</div>
<div class="form-group">
  <label>1. The teacher covers the entire syllabus</label>
<div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect01" onBlur="f1()">
    <option selected>Feedback</option>
    <option>Excellent</option>
    <option>Very Good</option>
    <option>Good</option>
    <option>Average</option>
    <option>Below Average</option>
  </select>
</div>
</div>
<div class="form-group">
  <label>2. The teacher discusses topics in detail</label>
<div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect01"onBlur="f2()">
    <option selected>Feedback</option>
    <option>Excellent</option>
    <option>Very Good</option>
    <option>Good</option>
    <option>Average</option>
    <option>Below Average</option>
  </select>
</div>
</div>
<div class="form-group">
  <label>3. The teacher possesses adequate knowledge of the subject taught</label>
<div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect01"onBlur="f3()">
    <option selected>Feedback</option>
    <option>Excellent</option>
    <option>Very Good</option>
    <option>Good</option>
    <option>Average</option>
    <option>Below Average</option>
  </select>
</div>
</div>
<div class="form-group">
  <label>4. The teacher inspires me by his/her knowledge in the subject</label>
<div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect01"onBlur="f4()">
    <option selected>Feedback</option>
    <option>Excellent</option>
    <option>Very Good</option>
    <option>Good</option>
    <option>Average</option>
    <option>Below Average</option>
  </select>
</div>
</div>
<div class="form-group">
  <label>5. The teacher communicates clearly</label>
<div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect01"onBlur="f5()">
    <option selected>Feedback</option>
    <option>Excellent</option>
    <option>Very Good</option>
    <option>Good</option>
    <option>Average</option>
    <option>Below Average</option>
  </select>
</div>
</div>
<div class="form-group">
  <label>6. Teacher shares the answers of class tests and feedback of assignments/ shows evaluated answer books of internal evaluation</label>
<div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect01"onBlur="f6()">
    <option selected>Feedback</option>
    <option>Excellent</option>
    <option>Very Good</option>
    <option>Good</option>
    <option>Average</option>
    <option>Below Average</option>
  </select>
</div>
</div>
<div class="form-group">
  <label>7. The teacher helps students by discussing career goals</label>
<div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect01"onBlur="f7()">
    <option selected>Feedback</option>
    <option>Excellent</option>
    <option>Very Good</option>
    <option>Good</option>
    <option>Average</option>
    <option>Below Average</option>
  </select>
</div>
</div>
<div class="form-group">
  <label>8. The teacher helps students by discussing career goals</label>
<div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect01"onBlur="f8()">
    <option selected>Feedback</option>
    <option>Excellent</option>
    <option>Very Good</option>
    <option>Good</option>
    <option>Average</option>
    <option>Below Average</option>
  </select>
</div>
</div>
<button type="submit"class="btn btn-primary text-white text-decoration-none" href="next.php">Next</button>
</form>
</div>
  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>