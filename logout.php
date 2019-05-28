<?php

	include("db.php");
    
session_start();
$senid=$_COOKIE['__cfduid'];

$sen=$_SESSION['cno'];

 $ck1="UPDATE register SET logs='0' WHERE cno='$sen' and logs='$senid'";
 $cq1=mysqli_query($con,$ck1);
session_destroy();

echo "<script>window.open('index.php','_self')</script>";



?>