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


$id=$_POST['tab'];


                   $l_select="SELECT * FROM cart WHERE (user_id='$ip_add' and product_id='$id')"or die(mysqli_error($con));
                                 $l_query=mysqli_query($con,$l_select)or die(mysqli_error($con));
                                 $l_count=mysqli_num_rows($l_query);
                                 if($l_count>=1){

                           ?><script>alert(you already added this);</script>
                           <?php
                           exit();
                           }
                           else{
                            $in_c="INSERT INTO cart(user_id,product_id,pro_qnt) VALUES('$ip_add','$id','1')"or die(mysqli_error($con));
                            $q_c=mysqli_query($con,$in_c);
                               if($q_c){
                                echo "run";

                               }
                               else{
                                echo "not";
                               }
                           }
                           ?>
