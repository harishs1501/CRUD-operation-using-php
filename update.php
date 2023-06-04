<?php

$con=mysqli_connect("localhost","root","","task") or die ("db not connected");

if (isset($_POST['submit'])) {

  $id = $_POST['id'];
$name=$_POST['name'];
$fname=$_POST['fname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$phnno=$_POST['phnno'];
$addr=$_POST['addr'];
$em=$_POST['em'];
$psd=$_POST['psd'];
$cpsd=$_POST['cpsd'];


  $sql = "update rge set name='$name',fname='$fname',gender='$gender',dob='$dob',phnno=$phnno,addr='$addr',em='$em',psd='$psd',cpsd='$cpsd' where id='$id'";


  $result = $con->query($sql);  

  if ($result == TRUE) {
    echo "<script>alert('update data success');window.location.href='view.php';</script>";
  } 
  else
   {
    echo "<script>alert('Update data error');window.location.href='view.php';</script>";
  }


  mysqli_close($con);
}

if (isset($_GET['id'])) {

    $id = $_GET['id']; 

    $sql = "select * from rge ('name','fname','gender','dob',phnno,'addr','em','psd','cpsd') WHERE `id`='$id'";

    $result = $con->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

           $name=$_POST['name'];
	$fname=$_POST['fname'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$phnno=$_POST['phnno'];
	$addr=$_POST['addr'];
	$em=$_POST['em'];
	$psd=$_POST['psd'];
	$cpsd=$_POST['cpsd'];

        } 
    }
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-..." crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
      <div class="card">
  <div class="card-body">
    <h5 class="card-title mb-3">User Form</h5>
    <form method="POST" action="update.php">
    	<div class="form-group">
				<label class="form-label">id</label>
				<input type="text" class="form-control" name="id" id="id" placeholder="Enter Your Name">
			</div>
      
      <div class="form-group">
				<label class="form-label">Name</label>
				<input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name">
			</div>
			<div class="form-group">
				<label class="form-label">Father's Name</label>
				<input type="text" class="form-control" name="fname" id="fname" placeholder="Enter Your Father's Name">
			</div>
			<div class="form-group">
				<label class="form-label">Gender : </label>
				<input type="radio" class="form-control-check"  name="gender" id="gender" value="Male">Male
				<input type="radio" class="form-control-check"  name="gender" id="gender" value="Female">Female
				<input type="radio" class="form-control-check"  name="gender" id="gender" value="Others">Others
			</div>
			<div class="form-group">
				<label class="form-label">DOB</label>
				<input type="text" class="form-control" name="dob" id="dob" placeholder="DD/MM/YYYY">
			</div>
			<div class="form-group">
				<label class="form-label">Phone no</label>
				<input type="text" class="form-control" name="phnno" id="phnno" placeholder="Enter Your Phone no">
			</div>
			<div class="form-group">
				<label class="form-label">Address</label>
				<textarea class="form-control" rows="5" name="addr" id="addr"></textarea>
			</div>
			<div class="form-group">
				<label class="form-label">Email</label>
				<input type="email" class="form-control" name="em" id="em" placeholder="Enter Your Email ID">
			</div>
			<div class="form-group">
				<label class="form-label">Password</label>
				<input type="password" class="form-control" name="psd" id="psd" placeholder="Enter password">
			</div>
			<div class="form-group">
				<label class="form-label">Confirm Password</label>
				<input type="password" class="form-control" name="cpsd" id="cpsd" placeholder="Re-enter your password">
			</div>

      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>
</div>
</div>
</body>
</html>