
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

$id=@$_GET['id'];
          $go_profile="SELECT * FROM  cart WHERE  user_id='$ip_add' and product_id='$id' ";
          $que_profile=mysqli_query($con,$go_profile);
          $count=mysqli_num_rows($que_profile);
          if($count == 0){ ?>
          <span class="fa fa-shopping-cart"></span> Add
      <?php } else {
          $run_profile=mysqli_fetch_array($que_profile);
          $produ=$run_profile['pro_qnt'];
          echo $produ; } ?>
