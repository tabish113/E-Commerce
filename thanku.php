<?php

session_start();

include("db.php");
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


$senid=$_COOKIE['__cfduid'];

if($senid=="0"){
  $ip_add=get_ip();
}else{
  $ip_add=$senid;
}

$sen=@$_SESSION['cno'];
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

$n="SELECT * FROM register where cno='$sen'";
$q=mysqli_query($con,$n);
$f=mysqli_fetch_array($q);
$nm5=$f['nm'];
$add=$f['adds'];
$no=$f['no'];
$pin=$f['pin'];


$in_d="INSERT INTO customer_orders(cust_id,invoice,p_id,p_nm,quan,amount,price,mrp,cprice,cat) VALUES('$sen','$order_id','$p_id','$pnm','$c_id','$t_pri','$pri','$mrp','$cprice','$cat')";

$inq=mysqli_query($con,$in_d)or die(mysqli_error($con));

}


// potato end
global $inq;
if($inq){
    
$in_r="INSERT INTO customer_order_details(invoice, cust_id,cust_name,address,pin,phone,datex,status,dt) VALUES('$order_id','$sen','$nm5','$add','$pin','$no','$date','pending','$waldt')";
$inqr=mysqli_query($con,$in_r)or die(mysqli_error($con));

$sel_c="SELECT * from customer_order_details where cust_id='$sen' and invoice='$order_id' ";
$inq_c=mysqli_query($con,$sel_c);
$rnp_c=mysqli_fetch_array($inq_c);
 $order_pid=$rnp_c[0];

$in_c="DELETE FROM cart where user_id='$ip_add'";
$q_c=mysqli_query($con,$in_c)or die(mysqli_error($con));


 
$n="SELECT * FROM register where cno='$sen'";
$q=mysqli_query($con,$n);
$f=mysqli_fetch_array($q);
$em1=$f['no'];

$fn1=$f['nm'];

$no1=$f['no'];
$ad1=addslashes($f['adds']);
$t_nm="$fn1";

global $t_pri;

$mailer='Raafta';
$mailer1='admin@raafta.com';
 

//Api for OTP
//Your authentication key
$authKey = "238009ABjBwNrJ5b9f9a81";

//Multiple mobiles numbers separated by comma
$mobileNumber = $no;

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "OXYGEN";

//Your message to send, Add URL encoding here.
$message = urlencode("Dear ".$nm5.", Thankyou for shopping with us ! Your order #".$order_pid." has been placed successfully, and will be delivered shortly.");

//Define route 
$route = "4";
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

//API URL
$url="http://api.msg91.com/api/sendhttp.php";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);

// End Api
    
  echo "<script>window.open('order_complete.php','_self')</script>";

} else{
    echo "error";
}
                 
?>