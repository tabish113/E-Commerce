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
$id=$_GET['count'];
$cnt_s="SELECT * FROM cart WHERE product_id='$id' and user_id='$ip_add'";
$cnt_q=mysqli_query($con,$cnt_s);
while($r=mysqli_fetch_array($cnt_q)){
	$qnt=$r['pro_qnt'];
	if($qnt==0){
     $delete="DELETE FROM `cart` WHERE user_id='$ip_add' and pro_qnt='0' ";
     $del_q=mysqli_query($con,$delete);

    }
	$cart_s1="SELECT * FROM product WHERE id='$id'"or die(mysqli_error($con));
$cart_q1=mysqli_query($con,$cart_s1)or die(mysqli_error($con));
$cart_f1=mysqli_fetch_array($cart_q1);
$id=$cart_f1['id'];

$pri=$cart_f1['price'];
$new_pri=$qnt*$pri;
if($new_pri!=0 ){
?>

	 <?php echo $new_pri;?>

<?php }}?>
