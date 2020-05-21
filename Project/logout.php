<?php   
session_start();
echo($_SESSION['login']);  
unset($_SESSION['login']);  
session_destroy();  
header("location:mainpage.php");  
?>  