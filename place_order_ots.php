<?php

include("db.php");
$senid=$_COOKIE['__cfduid'];

$emai=$_POST['cmail'];
$otp1=$_POST['otp'];
$sql="SELECT * FROM register1 WHERE cno='$emai' " or die(mysqli_error($con));
$run=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($run)){
$otp2=$row['otp'];
$id=$row['id'];
$nm=$row['nm'];

$em=$row['cno'];
$ps=$row['ps'];
$em1=$row['no'];
$add=$row['adds'];
$pin=$row['pin'];
$refer=$row['refer'];
$rf_cd=md5($row['refer']);


$order_id='OD_'.md5(rand());
date_default_timezone_set("Asia/Calcutta");
$date=date('d-m-y H:i:s');
$waldt=date('y-m-d');

function get_ip() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){  
        $ip = $_SERVER['HTTP_CLIENT_IP'];}
    else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ 
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];}
    else{ 
        $ip = $_SERVER['REMOTE_ADDR'];}
 
    return $ip;
}
$ip_add=get_ip();
$no=$row['no'];
}
if($otp1 == $otp2){ 

$insert="INSERT INTO register(nm,no,ps,adds,pin,cno,datex,refer,logs) VALUES ('$nm','$no','$ps','$add','$pin','$em','$date','$refer','$senid')";
$run_insert=mysqli_query($con,$insert)or die(mysqli_error($con));

	if($run_insert){

$refer1="INSERT INTO refer_amt(user_id,amount,c_id) VALUES ('$refer','100','$rf_cd')";
$refer2=mysqli_query($con,$refer1);
session_start();

$sql1="SELECT * FROM register where cno='$em' AND ps='$ps'";

$run1=mysqli_query($con,$sql1) or die(mysqli_error($con));
$check=mysqli_num_rows($run1);


if($check==1 ){
    $_SESSION['cno']=$em;


echo "<script>alert('You are successfully registered to build the network.')</script>";
echo "<script>window.open('placeorder.php','_self')</script>";



}
}
} else {

echo 'OTP entered is Incorrect !';
$ins = "INSERT INTO main_otp values('','$emai','$otp2','$date')";
$run_in=mysqli_query($con,$ins)or die(mysqli_error($con)); 

$sql1="SELECT * FROM main_otp where cmail='$emai' AND otp='$otp2'";
$run1=mysqli_query($con,$sql1) or die(mysqli_error($con));
$check=mysqli_num_rows($run1);
if($check >= 4){
echo "<script>window.open('main.php?login=session_expired...!','_self')</script>";
}
}
?>