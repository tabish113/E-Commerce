<?php
session_start();

include("db.php");


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
$senid=$_COOKIE['__cfduid'];

if($senid=="0"){
  $ip_add=get_ip();
}else{
  $ip_add=$senid;
}
if(isset($_POST['submit'])){
$add=addslashes($_POST['add1']);
$no=$_POST['no1'];
$pin=$_POST['pin1'];
$nm=$_POST['nm1'];
$em1=$_POST['em1'];



$fn2=0;
$cnt_s="SELECT * FROM cart WHERE user_id='$ip_add' and pro_qnt!='0'";
$cnt_q=mysqli_query($con,$cnt_s);
while($r=mysqli_fetch_array($cnt_q)){
  $c_id=$r['pro_qnt'];
  $p_id=$r['product_id'];


  $cart_s1="SELECT * FROM product WHERE id='$p_id'"or die(mysqli_error($con));
$cart_q1=mysqli_query($con,$cart_s1)or die(mysqli_error($con));
$cart_f1=mysqli_fetch_array($cart_q1);
$id=$cart_f1['id'];
$img=$cart_f1['img1'];
$pnm=$cart_f1['nm'];

$pri=$cart_f1['price'];

$mrp=$cart_f1['mrp'];
$cprice=$cart_f1['cp'];
$cat=$cart_f1['cat'];


$t_pri=$c_id*$pri;

$fn2+="$t_pri";
$show_update="UPDATE register SET adds='$add',pin='$pin',nm='$nm',em='$em1' WHERE cno='$sen'";
$showrun1=mysqli_query($con,$show_update)or die(mysqli_error($con));

 }
if($showrun1){

include 'GWAY/src/instamojo.php';

$api = new Instamojo\Instamojo('b1c15c8ed847b84axxxxxxxxxxx', '635242649ab4f90xxxxxxxxxx','https://www.instamojo.com/api/1.1/');   

try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => 'Buy Oxygen Credit',
        "amount" => $fn2,
        "buyer_name" => $nm,
        "phone" => $no,
        "send_email" => true,
        "send_sms" => true,
        "status" => Credit,
        "email" => $em1,
        'allow_repeated_payments' => false,

        "redirect_url" => "https://oxygencredit.com/thankyou.php",
        "webhook" => "https://oxygencredit.com/GWAY/webhook.php"
        ));
    //print_r($response);

    $pay_ulr = $response['longurl'];

    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();

}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}

  }
 }
   else{
       echo "error";
   }
    echo $em;
?>
