<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>New Alumni</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
  <div class="row bg-light">
  <div class="col-lg-1 col-md-2 col-12">
    <center><img src="imgs/logo2.png"class="img-fluid"style="margin-top: 15px; width:100%;height: 100%;"></center>
  </div>
  <div class="col-lg-11 col-md-10 col-12">
  <center><h1 style="color:RGB(0, 0, 128);">S.S.S.S.S.Ram Singh Bisht Government Polytechnic Dwarahat (Almora),Uttrakhand</h1>
  <h4 style="color:RGB(0, 0, 128);"> New Alumni </h4></center>
  </div>
</div>
</div>
<div class="w-50 m-auto bg-light">
<form action="aluifo.php" method="post" enctype="multipart/form-data">
<div class="form-group ">
  <label>Alumni Name</label>
<input type="text" name="aname" placeholder="Full Name"autocomplete="off"class="form-control" required/>
</div>
<div class="form-group">
  <label>Branch</label>
<input type="text" name="branch" placeholder="Your Branch"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>Roll Number</label>
<input type="text" name="rn" placeholder="UBTER Roll Nuber"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>Passed Out Year</label>
<input type="text" name="poy" placeholder="From-to"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>Email Address</label>
<input type="text" name="email" placeholder="Email Address"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>Mobile Number</label>
<input type="text" name="mn" placeholder="Mobile Number"autocomplete="off"class="form-control"required/>
</div>
<div class="form-group">
  <label>current Positions</label>
<input type="text" name="cp" placeholder="now situation"autocomplete="off"class="form-control"required/>
</div>
<div class="custom-file">
    <input type="file" name="cf"class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Upload Image</label>
  </div><br><br>
<button type="submit"class="btn btn-primary" name="submit">Register</button>
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