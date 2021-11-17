<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>News Upload</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script>
    function kitun()
{
var a=document.getElementById("n").value;
if (a=="")
document.getElementById("n").style.border=" 2px solid red";
else
document.getElementById("n").style.border="";
}
  </script>
</head>
<body>
  <div class="container-fluid">
  <div class="row bg-light">
  <div class="col-lg-1 col-md-2 col-12">
    <center><img src="imgs/logo2.png"class="img-fluid"style="margin-top: 15px; width:100%;height: 100%;"></center>
  </div>
  <div class="col-lg-11 col-md-10 col-12">
  <center><h1 style="color:RGB(0, 0, 128);">S.S.S.S.S.Ram Singh Bisht Government Polytechnic Dwarahat (Almora),Uttrakhand</h1>
  <h4 style="color:RGB(0, 0, 128);"> Upload News </h4></center>
  </div>
</div>
</div>
  <div class="w-50 m-auto bg-light">
<form action="aluifo.php" method="post" enctype="multipart/form-data"><br>
<div class="form-group ">
  <label>Date</label>
<input type="date" name="date" placeholder="dd/mm/yy"autocomplete="off"class="form-control" required/>
</div>
<div class="form-group ">
  <label>Subject</label>
<input type="Text" name="sub" placeholder="Subject"autocomplete="off"class="form-control" required/>
</div>
<div class="form-group ">
  <label>News Image</label>
<div class="custom-file">
    <input type="file" name="cf"class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Upload Image</label>
  </div>
</div>
</form>
</div>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>