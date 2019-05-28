<?php
include("db.php");


$nm=$_POST['nm'];
$em=md5($_POST['no']);
$em1=$_POST['no'];
$ps=$_POST['ps'];
$cps=$_POST['cps'];
$add=$_POST['add'];
$pin=$_POST['pin'];
$refer=$_POST['refer'];

date_default_timezone_set("Asia/Calcutta");
$date=date('d-m-y H:i:s');
$otp = rand(100000, 999999);

$sql="SELECT * FROM register WHERE cno='$em'" or die(mysqli_error($con));

$run=mysqli_query($con,$sql);

$check=mysqli_num_rows($run);

if(preg_match('/^[6-9][0-9]{9}+$/', $em1)){
	

if (empty($_POST["nm"])) {
		echo "First name is empty";
		exit();}



else if (empty($_POST["no"])) {
		echo "Enter mobile number";
		exit();
	}

else if (empty($_POST["ps"])) {
		echo "Password is empty";
		exit();}



else if($check==1){
	
	echo "<script>alert('Phone number is already registered !')</script>";
	echo "<script>window.open('placeorder.php','_self')</script>";
	exit();
}

else if($ps!=$cps){
		echo "Password not matched !..";
		exit();}


else{
//Api for OTP
//Your authentication key
$authKey = "238009ABjBwNrJ5b9f9a81";

//Multiple mobiles numbers separated by comma
$mobileNumber = $em1;

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "OXYGEN";

//Your message to send, Add URL encoding here.
$message = urlencode("Use ".$otp." as your login OTP. OTP is confidential. Raafta never calls you asking for OTP. Sharing it with anyone gives them full access to Raafta Account.");

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
	
$sqlu="SELECT * FROM register1 WHERE cno='$em'" or die(mysqli_error($con));
$runu=mysqli_query($con,$sqlu);
$checku=mysqli_num_rows($runu);
if($checku==1){
    $insertu="UPDATE register1 set nm='$nm',ps='$ps',otp='$otp',datex='$date',adds='$add',pin='$pin',refer='$refer' where cno='$em' " or die(mysqli_error($con));
	$run_insertu=mysqli_query($con,$insertu)or die(mysqli_error($con));
} else { 	
    $insert1="INSERT INTO register1(nm,no,ps,adds,pin,otp,datex,cno,refer) VALUES ('$nm','$em1','$ps','$add','$pin','$otp','$date','$em','$refer')" or die(mysqli_error($con));
	$run_insert1=mysqli_query($con,$insert1)or die(mysqli_error($con));
	}
	?>
    <script>
    $('#ijhi').load("place_order_otq.php?idj=<?php echo $em; ?>").fadeIn("slow");
    </script>
    <?php
    


	
}
} else { echo "<script>alert('Enter valid mobile number... !')</script>";
echo "<script>window.open('placeorder.php','_self')</script>";
}


?>

