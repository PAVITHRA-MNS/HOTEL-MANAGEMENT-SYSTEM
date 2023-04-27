//table


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>first</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css">

</head>
<style>
	table
	{
		margin-left: 0px;
		color: darkred;
		font-weight: bold;
		border: 1px solid black;

	}
	.li{
		margin-top: 100px;
		margin-left: 600px;
		background-color: blue;
		border-radius: 5px;
		color: white;
		font-size: 20px;


		padding: 10px;
	}
	a:hover{
		color: white;
	}
.le{
		margin-top: 200px;
		border-radius: 10px;
		margin-left: 1200px;
		background-color: crimson;
		color: white;
		font-size: 20px;


		padding: 10px;
	}
	body
	{
		background-color: white;
	}
th
{


}


	table
	{

	}


</style>






<body>
	<h1 align="center" style="color: black; font-weight: bold;">Welcome to Admin page</h1>
	<a href="home.php" class="le">Go To Home</a>
	<br><br><br>
	<div class="card_body">
		<div class="table-responsive">
			<table class="table table-bordered">
  <thead>
    <tr>
    	 <th scope="col">S.No</th>

      <th scope="col">Name</th>
      <th scope="col">Check In</th>
      <th scope="col">Check Out</th>
      <th scope="col">Room</th>
      <th scope="col">Adults</th>
      <th scope="col">Children</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	$con= new mysqli("localhost","root","","book");
     $sl=0;
  	$query1=mysqli_query($con,"select * from bookingtable");
  	while($row=mysqli_fetch_array($query1))
  	{
  		$sl++;


  	?>
  	<tr>
  		<td><?php echo $sl;?></td>
  		<td><?php echo $row['Name']; ?></td>
  		<td><?php echo $row['Checkin']; ?></td>
  		<td><?php  echo $row['Checkout']; ?></td>
  		<td><?php  echo $row['Rooms']; ?></td>
  		<td><?php  echo $row['Adults']; ?></td>
  		  		<td><?php echo $row['Children']; ?></td>

  		<td><?php echo $row['Email']; ?></td>

  		<td><?php  echo $row['Phone']; ?></td>
  		<td><a href="del.php?i=<?php echo $row['id']; ?>">Cancel</a></td>


  		<!--<td><form action="first.php" method="post"><input type="submit" name="ins" value="Delete" style="padding:5px; width: 80px;"></form></td>-->

  	</tr>

  <?php  } ?>




  </tbody>
</table>
<br><br><br>

<a href="bookingform.php" class="li">Add</a>


<br><br><br>
		</div>
	</div>

</body>
</html>
