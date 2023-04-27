//new

<?php
$con= new mysqli("localhost","root","","admin");

$Name=$_POST['Name'];
$Password=$_POST['Password'];
$sql="select * from admintable where Name='$Name' and Password='$Password'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count>0)
{
header("location:table.php");
}
else
{
	echo "Name or Password Invalid";
}
	?>
