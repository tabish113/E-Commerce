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
?>
					
<?php
$fn2=0;
$go_profile="SELECT * FROM  cart WHERE  user_id='$ip_add' and pro_qnt!='0'";
$que_profile=mysqli_query($con,$go_profile);
$count=mysqli_num_rows($que_profile);
while($run_profile=mysqli_fetch_array($que_profile)){
$fn=$run_profile['product_id'];
$user_id=$run_profile['user_id'];
$d=$run_profile['pro_qnt'];
$go_profile1="SELECT * FROM  product WHERE  id='$fn' ";
$que_profile1=mysqli_query($con,$go_profile1);
$count1=mysqli_num_rows($que_profile1);
$run_profile1=mysqli_fetch_array($que_profile1);

$fn1=$run_profile1['price'];
$values=$d*$fn1;

$fn2+="$values";


}
				?>
		<?php echo $count;?>
		
		
					