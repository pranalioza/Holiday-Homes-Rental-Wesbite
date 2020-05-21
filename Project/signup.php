<?php
extract($_POST);
include("database.php");
$rs=mysqli_query($db,"select * from users where Username='$username1'");
if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
mysqli_free_result($rs);
$query="Insert into `users` (`First Name`,`Last Name`,`Username`,`Password`,`Contact No`) values ('$firstname','$lastname','$username1','$password1','$contact')";
  
	
$rs=mysqli_query($db,$query)or die(mysqli_error($db)); 
echo "<br><br><br><div class=head1>Your Login ID  $username1 Created Sucessfully</div>";
echo "<br><div><a href=mainpage.php>Login</a></div>";
?>
