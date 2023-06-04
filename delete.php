<?php
$con=mysqli_connect("localhost","root","","task") or die ("db not connected");
$id=$_GET['id'];
$query="delete from rge where id=$id";
$res=mysqli_query($con,$query);
echo"<script>alert('Delete Successfully');
window.location.href='view.php';</script>";
?>