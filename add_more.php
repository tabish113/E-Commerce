<?php
include("db.php");
session_start();
$sen=@$_SESSION['cno'];
function get_ip() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];}
    else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];}
    else{
        $ip = $_SERVER['REMOTE_ADDR'];}

    return $ip;
}
$senid="test";

if($senid=="0"){
  $ip_add=get_ip();
}else{
  $ip_add=$senid;
}

if(!isset($_SESSION['cno'])){

header('location:index.php?error=you are not sign in');

}

$id=$_POST['tab'];
$sen=$_SESSION['mail'];
$cnt_s="SELECT * FROM cart WHERE product_id='$id' and user_id='$ip_add'";
$cnt_q=mysqli_query($con,$cnt_s);
while($r=mysqli_fetch_array($cnt_q)){
	$c_id=$r['pro_qnt'];
	$more="$c_id";
}
$more++;
	                         	$in_c="UPDATE cart set pro_qnt='$more' where product_id='$id' and user_id='$ip_add' ";
	                         	$q_c=mysqli_query($con,$in_c);

?>
