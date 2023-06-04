<!DOCTYPE html>
<html>
<head>
	<title>view</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-8">
				<table class="table table-bordered">
					<tr><th>Id</th>
						<th>Name</th>
						<th>Father's Name</th>
						<th>Gender</th>
						<th>DOB</th>
						<th>Phnno</th>
						<th>Addr</th>
						<th>Email</th>
						<th>Password</th>
						<th>C Password</th>
						<?php
						$con=mysqli_connect("localhost","root","","task") or die ("db not connected");

						$query2="select * from rge";
						$result=mysqli_query($con,$query2);
						while($row=mysqli_fetch_array($result))
						{
							$id=$row[0];
							echo"<tr><td>$row[0]</td>";
							echo"<td>$row[1]</td>";
							echo"<td>$row[2]</td>";
							echo"<td>$row[3]</td>";
							echo"<td>$row[4]</td>";
							echo"<td>$row[5]</td>";
							echo"<td>$row[6]</td>";
							echo"<td>$row[7]</td>";
							echo"<td>$row[8]</td>";
							echo"<td>$row[9]</td>";
							echo"<td><a class='btn btn-success' href='update.php? id=$id' name='update'>Update</a></td>";
							echo"<td><a class='btn btn-danger' href='delete.php? id=$id' name='delete'>Delete</a></td></tr>";
						}
						?>

					</table>
			</div>
		</div>
	</div>

</body>
</html>