//first

<?php



$con= new mysqli("localhost","root","","book");


if(isset($_POST['submit']))
{
	$Name=$_POST['Name'];
		$Checkin= date('Y-m-d', strtotime($_POST['Date']));
		$Checkout= date('Y-m-d', strtotime($_POST['Datee']));


	$Rooms=$_POST['Noofrooms'];

	$Adults	=$_POST['Noofadults'];
	$Children=$_POST['Noofchildren'];

	$Email=$_POST['Email'];


	$Phone=$_POST['Phone'];
	$sql="INSERT INTO bookingtable(Name,Checkin,Checkout,Rooms,Adults,Children,Email,Phone) VALUES('$Name','$Checkin','$Checkout',$Rooms,
		$Adults,$Children,'$Email',$Phone)";
	if($con->query($sql))
	{
     echo "";

	}
else
{
	echo " insert fail";
}

}
else
{

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style>
	.sp{

		width: 300px;
		height: 150px;
		background-color: pink;
		margin-left: 500px;
		margin-top:250px ;
		border: 1px solid black;
		border-radius: 15px;

	}
	h3
	{
		margin-top: 50px;
		margin-left: 30px;
	}
	.ali{
		margin-top: 200px;
		margin-left: 120px;
		text-decoration: none;
		background-color: blue;
		padding: 7px;
		border-radius: 6px;
		border: 1px solid white;
		color: white;
	}
</style>
<body>
	<div class="sp">
		<h3>You Booked Successfully!!!</h3>
		<a href="home.php" class="ali">Ok</a>

	</div>

</body>
</html>
