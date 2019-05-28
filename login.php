<?php 
include ("db.php");

session_start();


$senid=$_COOKIE['__cfduid'];


if(isset($_POST['submit'])){   
$cno=md5($_POST['cno']);
$ps=($_POST['ps']);
$sql="SELECT * FROM register where cno='$cno' AND ps='$ps'";
$run = mysqli_query($con,$sql) or die(mysqli_error($con));
if(mysqli_num_rows($run)>0){


 $ck1="UPDATE register SET logs='0' WHERE cno!='$cno' and logs='$senid'";
 $cq1=mysqli_query($con,$ck1);
}
if($cq1){
    $ck="UPDATE register SET logs='$senid' WHERE cno='$cno'";
 $cq=mysqli_query($con,$ck);




    $_SESSION['cno']=$cno;
    echo "<script>window.open('cart.php?logged=login successfully','_self')</script>";
}
else {
      
    echo "<script>alert('username and password not matched')</script>";
 
    echo "<script>window.open('log.php?logged=login error','_self')</script>";
   
}
} 
?>