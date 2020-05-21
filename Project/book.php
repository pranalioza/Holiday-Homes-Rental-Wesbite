<?php
extract($_POST);
include("database.php");
// $rs=mysqli_query($db,"select * from users where Username='$username1'");
// if (mysqli_num_rows($rs)>0)
// {
// 	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
// 	exit;
// }
// mysqli_free_result($rs);

$checkin = $_GET['datepicker1'];
echo $checkin."<br>";
$checkout = $_GET['datepicker2'];
echo $checkout."<br>";

$adults = $_GET['adult'];
echo $adults."<br>";

$children = $_GET['children'];
echo $children."<br>";

$amount = $_GET['amount2'];
echo $amount;



$query="Insert into `booking` (`checkin`,`checkout`,`adults`,`children`,`amount`) values ('$checkin','$checkout','$adults','$children','$amount')";
  
	
$rs=mysqli_query($db,$query)or die(mysqli_error($db)); 
echo "<br><br><br><div class=head1>Booking Done Sucessfully</div>";
//echo "<br><div><a href=mainpage.php>Login</a></div>";
?>
