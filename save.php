<?php
$con=mysqli_connect("localhost","root","","task") or die ("db not connected");

$name=$_POST['name'];
$fname=$_POST['fname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$phnno=$_POST['phnno'];
$addr=$_POST['addr'];
$em=$_POST['em'];
$psd=$_POST['psd'];
$cpsd=$_POST['cpsd'];

$query="insert into rge (name,fname,gender,dob,phnno,addr,em,psd,cpsd) values ('$name','$fname','$gender','$dob',phnno,'$addr','$em','$psd','$cpsd')";
if(isset($_POST['submit']))
{
	if($res=mysqli_query($con,$query))
	{
		echo"<script>alert('Data Saved');
		window.location.href='crude.php';</script>";
	}
	else
	{
		echo"Data error";
	}
}
?>