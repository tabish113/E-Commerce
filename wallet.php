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
if(isset($_SESSION['cno'])){$ip_add=$_SESSION['cno'];}else{$ip_add=get_ip();}
 

?>

<!doctype html>
 <html class="no-js" lang="en"> <!--<![endif]-->

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  
  <link rel="shortcut icon" href="img/logo1.png" type="image/png">
  

  
  <title>
  Your Shopping Cart
  
  
  
  </title>

  

  <!-- font -->
  


<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 
      
        'Dosis:100,200,300,400,500,600,700,800,900'
	  
      
      
      	
      		,
      	      
        'Roboto Condensed:100,200,300,400,500,600,700,800,900'
	  
      
      
      	
      		,
      	 
        'Roboto:100,200,300,400,500,600,700,800,900'
	  
    ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); 
</script>


  <!-- /snippets/social-meta-tags.liquid -->


  <link href="oxygen credit/s/files/1/1485/6894/t/3/assets/timber.scss5419.css?9965371921026575025" rel="stylesheet" type="text/css" media="all" />
  <link href="oxygen credit/s/files/1/1485/6894/t/3/assets/theme.scss5419.css?9965371921026575025" rel="stylesheet" type="text/css" media="all" /> 

  <!--  css theme  -->
  <link href="oxygen credit/s/files/1/1485/6894/t/3/assets/style5419.css?9965371921026575025" rel="stylesheet" type="text/css" media="all" />
  <link href="oxygen credit/s/files/1/1485/6894/t/3/assets/owl-slider5419.css?9965371921026575025" rel="stylesheet" type="text/css" media="all" />
  <link href="oxygen credit/s/files/1/1485/6894/t/3/assets/settings5419.css?9965371921026575025" rel="stylesheet" type="text/css" media="all" />

  <!--  end  -->
  <link href="oxygen credit/s/files/1/1485/6894/t/3/assets/engo_plugins5419.css?9965371921026575025" rel="stylesheet" type="text/css" media="all" /> 
  <link href="oxygen credit/s/files/1/1485/6894/t/3/assets/engo_base.scss5419.css?9965371921026575025" rel="stylesheet" type="text/css" media="all" /> 
  <link href="oxygen credit/s/files/1/1485/6894/t/3/assets/slick5419.css?9965371921026575025" rel="stylesheet" type="text/css" media="all" /> 
  <link href="oxygen credit/s/files/1/1485/6894/t/3/assets/animate.min5419.css?9965371921026575025" rel="stylesheet" type="text/css" media="all" /> 

  
 
<script defer="defer" integrity="sha256-qhF2cfCYNFAl0umvIOrU7EMiySlENmgKI12SDbDaDWY=" crossorigin="anonymous" src="oxygen credit/s/assets/storefront/express_buttons-aa117671f098345025d2e9af20ead4ec4322c9294436680a235d920db0da0d66.js"></script>
<script defer="defer" integrity="sha256-NfqRkSQwKw0JfNupCky6Zxtoijw8YUA8km/3gYu7kY8=" crossorigin="anonymous" src="oxygen credit/s/assets/storefront/features-35fa919124302b0d097cdba90a4cba671b688a3c3c61403c926ff7818bbb918f.js"></script>

  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/jquery.min5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/assets/themes_support/api.jquery-0ea851da22ae87c0290f4eeb24bc8b513ca182f3eb721d147c009ae0f5ce14f9.js" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/modernizr.min5419.js?9965371921026575025" type="text/javascript"></script>
  <!-- swatch   -->
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/bootstrap-custom5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/assets/themes_support/option_selection-ea4f4a242e299f2227b2b8038152223f741e90780c0c766883939e8902542bda.js" type="text/javascript"></script>
  <!-- end   -->

  <!--   jstheme -->


  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/bootstrap.min5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/theme5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/jquery.fancybox5419.js?9965371921026575025" type="text/javascript"></script>

  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/owl.carousel.min5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/engo-plugins5419.js?9965371921026575025" type="text/javascript"></script>
  
  

  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/jquery.zoom5419.js?9965371921026575025" type="text/javascript"></script>


  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/store5419.js?9965371921026575025" type="text/javascript"></script>


  <!--  end  -->

  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/engo-theme5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/slick.min5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/jquery.flipster.min5419.js?9965371921026575025" type="text/javascript"></script>


</head>

<body class="template-cart" style="background:#ffffff">
  <!-- preloader -->
  
  <!-- end preloader -->
 

  

  <div>
  
<?php include("header.php");?>

   <div class="page-container" id="PageContainer">
    <main class="main-content" id="MainContent" role="main">
      
<?php
          $s_reg="SELECT * FROM register where cno='$sen'";
          $q_reg=mysqli_query($con,$s_reg);
          $f_reg=mysqli_fetch_array($q_reg);
          $r_no=$f_reg['no'];
          $r_nm=$f_reg['nm'];
          ?>

  
  <div class="container container-ver2">
    <div class="row">
      <div class="col-md-8">
       <center> <h2>Welcome <?php echo $r_nm;?></h2></center></br>
       
        <div class="cart-box-container cart-box-cart-container">

         <?php
include("db.php");


date_default_timezone_set("Asia/Calcutta");
 $date=date('y-m-d');
 $dt1=strtotime("$date");

  $query="SELECT * from customer_order_details where cust_id='$sen' and status!='Cancelled'" or die(mysqli_error());
                                    $sql=mysqli_query($con,$query);
                                    while($row=mysqli_fetch_array($sql)){
                                    $c_id=$row[1];
                                    $p_id=$row[2];
                                    $olddt=$row['dt'];
                                    $id=$row['id'];

     
                            
                      $query8="SELECT * from customer_orders where invoice='$c_id' and cust_id='$sen' " or die(mysqli_error());
                      $sql8=mysqli_query($con,$query8);
                  
                
                      while($row8=mysqli_fetch_array($sql8)){

                      $pid=$row8['p_id'];
                      $cat=$row8['cat'];
                      $quan=$row8['quan'];
                      $count=$row8['invoice'];

                      





$dt=strtotime("$olddt");
$old=floor($dt/(60*60*24));
$new=floor($dt1/(60*60*24));
 $df=$new-$old;

                        
                      $rate=1.47;
                         
}

                      $query1="SELECT * from customer_orders where invoice='$count' and cust_id='$sen' " or die(mysqli_error());
                      $sql1=mysqli_query($con,$query1);
                  
                  $count=mysqli_num_rows($sql1);

                     if($count>1){

                           $plant=$rate*$df*$count;        
}else{
                           $plant=$rate*$df*$quan*$count;        
  
}



 


?> 
          <form  method="POST" novalidate>
            <div class="box cart-container">

              <table class="table cart-table space-30">

                <tbody>
                  
                  <tr class="item_cart">
                    <td class="product-photo"><h5>Order No.<?php echo $id;?></h5></td>
                    <td class="produc-name">
                      <a href="/products/zantedeschia-calla?variant=362516676625"><?php echo "Total Credit Is : ";?></a></br></br>
                       

                    </td>
                    <td class="produc-price">
                                         
                      <span class="amount"><span  ><?php echo $plant;?></span></span>  
                      

                    </td>
                  </tr>
                  
                 
                  
                </tbody>
              </table>
             

            </div>
          </form>
<?php }?>



          <!-- End cat-box-container -->
        </div>
      </div>


      <div class="col-md-4">
        <div class="item">
          <center><h4><b>Refer and Earn 100 Oxygen Credit</b></h4></center></br>
          
          <h3>Your Refer Id : <?php echo $r_no;?></h3>
          <?php

$fn2=0;
$go_profile="SELECT * FROM  refer_amt WHERE  c_id='$sen'";
$que_profile=mysqli_query($con,$go_profile);
$count=mysqli_num_rows($que_profile);
while($run_profile=mysqli_fetch_array($que_profile)){
$amt=$run_profile['amount'];

$fn2+="$amt";
}
?>
          <div class="item-coupon item-total" style="background:red; color:#fff;">
            
            <div class ="total" >
              <span>You Earn</span>
              
              <span class="price"><span  > <?php echo $fn2;?> Credit</span></span></br></br>
<?php
if($fn2<500){
?>
            <span class="price"><span  style="color:#000;"> Redeem when credit is more then 500</span></span>

<?php } else{?>
      <a href="redeem.php?cre=<?php echo $fn2;?>"><input type="button" style=" color:#000; background:golden; border-color:gray;"    class="btn btn-primary btn-lg full-width" value="Redeem"></a>
<?php }?>
            </div>

          </div>
          
        </div>
      </div>



    </div>
  </div>
</div>

<style>
  .banner-header-cart h3 {
    display: none;
  }
</style>


</div>


    </main>
  </div>

  <div id="back-to-top">
    <i class="fa fa-long-arrow-up"></i>
  </div>
<?php include("footer.php");?>>
  </div>





  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/handlebars.min5419.js?9965371921026575025" type="text/javascript">

  </script>
  <!-- /snippets/ajax-cart-template.liquid -->



  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/ajax-cart5419.js?9965371921026575025" type="text/javascript"></script>
  

  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/fastclick.min5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/javascripts/currencies.js" type="text/javascript"></script>
<script src="oxygen credit/s/files/1/1485/6894/t/3/assets/jquery.currencies.min5419.js?9965371921026575025" type="text/javascript"></script>

<script type="text/javascript">
  Shopify.doNotTriggerClickOnThumb = false;
</script>

 

<script>
  $(document).on('click','.overlay, .continue-shopping, .close-window', function() {   
    hidePopup(".engo-popup");
  });

$('#cart').load("cart_show.php").fadeIn("slow");
$('#total').load("total.php").fadeIn("slow");

</script>
  

  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/main5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/quickview5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/wish-list5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/timber5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/countdown5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/collection5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/instafeed.min5419.js?9965371921026575025" type="text/javascript"></script>

</html>
