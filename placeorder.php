<?php
include("db.php");
session_start();
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

$sen=@$_SESSION['cno'];
?>
<!doctype html>
 <html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="theme-color" content="#7796A8">

  <link rel="shortcut icon" href="//cdn.shopify.com/s/files/1/1485/6894/files/favicon_32x32.png?v=1519211374" type="image/png">



  <title>
  Howea Forsteriana



  &ndash; Plant - Gardening &amp; Houseplants Shopify Theme

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

  <link href="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/timber.scss.css?2010435696044133933" rel="stylesheet" type="text/css" media="all" />
  <link href="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/theme.scss.css?2010435696044133933" rel="stylesheet" type="text/css" media="all" />

  <!--  css theme  -->
  <link href="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/style.css?2010435696044133933" rel="stylesheet" type="text/css" media="all" />
  <link href="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/owl-slider.css?2010435696044133933" rel="stylesheet" type="text/css" media="all" />
  <link href="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/settings.css?2010435696044133933" rel="stylesheet" type="text/css" media="all" />

  <!--  end  -->
  <link href="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/engo_plugins.css?2010435696044133933" rel="stylesheet" type="text/css" media="all" />
  <link href="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/engo_base.scss.css?2010435696044133933" rel="stylesheet" type="text/css" media="all" />
  <link href="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/slick.css?2010435696044133933" rel="stylesheet" type="text/css" media="all" />
  <link href="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/animate.min.css?2010435696044133933" rel="stylesheet" type="text/css" media="all" />


<script defer="defer" integrity="sha256-QWAKW7dSEXRHCp5PDx3Cwf99Td8W96LyRS7x1CdArac=" crossorigin="anonymous" src="//cdn.shopify.com/s/assets/storefront/express_buttons-41600a5bb7521174470a9e4f0f1dc2c1ff7d4ddf16f7a2f2452ef1d42740ada7.js"></script>
<script defer="defer" integrity="sha256-NfqRkSQwKw0JfNupCky6Zxtoijw8YUA8km/3gYu7kY8=" crossorigin="anonymous" src="//cdn.shopify.com/s/assets/storefront/features-35fa919124302b0d097cdba90a4cba671b688a3c3c61403c926ff7818bbb918f.js"></script>

  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/jquery.min.js?2010435696044133933" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/assets/themes_support/api.jquery-0ea851da22ae87c0290f4eeb24bc8b513ca182f3eb721d147c009ae0f5ce14f9.js" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/modernizr.min.js?2010435696044133933" type="text/javascript"></script>
  <!-- swatch   -->
  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/bootstrap-custom.js?2010435696044133933" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/assets/themes_support/option_selection-ea4f4a242e299f2227b2b8038152223f741e90780c0c766883939e8902542bda.js" type="text/javascript"></script>
  <!-- end   -->

  <!--   jstheme -->


  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/bootstrap.min.js?2010435696044133933" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/theme.js?2010435696044133933" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/jquery.fancybox.js?2010435696044133933" type="text/javascript"></script>

  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/owl.carousel.min.js?2010435696044133933" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/engo-plugins.js?2010435696044133933" type="text/javascript"></script>



  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/jquery.zoom.js?2010435696044133933" type="text/javascript"></script>


  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/store.js?2010435696044133933" type="text/javascript"></script>


  <!--  end  -->

  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/engo-theme.js?2010435696044133933" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/slick.min.js?2010435696044133933" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/jquery.flipster.min.js?2010435696044133933" type="text/javascript"></script>


</head>

<body class="template-product" style="background:#ffffff">
  <!-- preloader -->

  <!-- end preloader -->
  <!--  search  -->

  <!-- search   -->



 <?php include("header.php"); ?>
 <?php include("db.php"); ?>


<?php

if(isset($_SESSION['cno'])){

  $sql="SELECT * FROM register where cno='$sen'";
$run = mysqli_query($con,$sql) or die(mysqli_error($con));
$fetch=mysqli_fetch_array($run);
$name=$fetch['nm'];
$adds=$fetch['adds'];
$pins=$fetch['pin'];
$nos=$fetch['no'];
$em=$fetch['em'];



?>

<div class="container">
<form  method="POST" id="reg_form1" action="cod.php">
            <div class="row" >


                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group label-floating is-empty">
                  <label class="control-label"></label>
                  <input class="form-control" id="nm1" name="nm1" placeholder="Name" type="text" value="<?php echo $name;?>" required>
                  <input class="form-control" id="no1" name="no1" placeholder="Name" type="hidden" value="<?php echo $nos;?>" required>


                </div>
              </div>

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group label-floating is-empty">
                  <label class="control-label"></label>
                  <input class="form-control"  name="em1" placeholder="E-mail" type="email" value="<?php echo $em;?>" required>

                </div>
              </div>



                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group label-floating is-empty">
                  <label class="control-label"></label>
            <textarea class="form-control" name="add1"  id="add1" placeholder="Delivery Address"  required><?php echo $adds;?></textarea>
                </div>
              </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group label-floating is-empty">
                  <label class="control-label"></label>
                  <input style="width:100%;" type="number" id="pin1" name="pin1"  size="auto" placeholder="Pin Code" value="<?php echo $pins;?>" required >

                </div>

              </div>
              <div class="col-lg-12 col-sm-12 col-sm-12 col-xs-12" id="resultxc" style="color:#ff5e3a;">

              </div>
</br>
<center>
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" id="rak1">
                <div class="form-group label-floating is-empty">

      <input type="submit"   id="colorred"   style=" color:#000; border-color:gray;"  name="submit"   class="btn btn-primary btn-lg full-width" value="Pay">
              </div>
              </center>
                </div>
           </form>

</div>
<?php
 }

else {
?>





<div class="container">
<form  method="POST" id="reg_form1">
            <div class="row" id="ijhi">


                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group label-floating is-empty">
                  <label class="control-label"></label>
                  <input class="form-control" id="nm" name="nm" placeholder="Name" type="text"  required>
                </div>
              </div>



                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group label-floating is-empty">
                  <label class="control-label"></label>
                  <input type="number" class="form-control" id="no" name="no" placeholder="Mobile Number"  required>
                </div>
              </div>

                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group label-floating is-empty">
                  <label class="control-label"></label>
                  <input class="form-control" id="ps" name="ps" placeholder="Password" type="password" required>
                </div>
              </div>

               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group label-floating is-empty">
                  <label class="control-label"></label>
                  <input class="form-control" id="cps" name="cps" placeholder="Confirm Password" type="password" required>
                </div>
              </div>


                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group label-floating is-empty">
                  <label class="control-label"></label>
            <textarea class="form-control" name="add"  id="add" placeholder="Delivery Address" required></textarea>
                </div>
              </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group label-floating is-empty">
                  <label class="control-label"></label>
                  <input type="number" id="pin" name="pin"  size="auto" placeholder="Pin Code" required >

                </div></div>

               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group label-floating is-empty">
                  <label class="control-label"></label>
                  <input class="form-control" id="refer" name="refer" placeholder="Refer Id" type="text" >
                </div>
              </div>



                   <div class="" >

                    <div  >
                      <label >

                    &nbsp;&nbsp;&nbsp;  I accept the <a href="terms.php">Terms and Conditions</a>

                      </label>
                    </div>
                  </div>
              </div>
              <div class="col-lg-12 col-sm-12 col-sm-12 col-xs-12" id="result512" style="color:#ff5e3a;">


</br>
<center>
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" id="rak1">
                <div class="form-group label-floating is-empty">

      <input type="button"   id="colorred" onClick="place();"  style=" color:#000; border-color:gray;"  name="change_pass"   class="btn btn-primary btn-lg full-width" value="Next">
              </div></div>
              </center>
                </div></div>
           </form>

</div>

<?php }?>
  <div id="back-to-top">
    <i class="fa fa-long-arrow-up"></i>
  </div>

  <?php include("footer.php");?>
  </div>


<script>

function place(){

    var nm = $("#nm").val();
    var no = $("#no").val();
    var ps = $("#ps").val();
    var cps = $("#cps").val();
    var add = $("#add").val();
    var pin = $("#pin").val();
    var refer = $("#refer").val();





    if (nm == '' || no == '' || ps == '' || cps == '' || add =='' || pin =='') {
alert("Fill All Fields");
exit();
}
 if(ps!=cps){
 alert('Passwords do not match! Try again!');
 exit();
 }
 document.getElementById("colorred").style.backgroundColor = "red";
    document.getElementById("colorred").style.color = "#fff";


         $.ajax({

          url:"place_order_otp.php",
          method:"POST",
          data:{add:add,no:no,nm:nm,ps:ps,cps:cps,pin:pin,refer:refer},
          success:function(data){

         $('#result512').html(data);

          }

         });
}

</script>



<script>

function place1(){

    var add1= $("#add1").val();
    var no1= $("#no1").val();
    var pin1= $("#pin1").val();
    var nm1= $("#nm1").val();


    if (add1=='' ||  pin1 == ''  ) {
alert("Fill all fields.. !");
exit();
}
document.getElementById("colorred").style.backgroundColor = "red";
    document.getElementById("colorred").style.color = "#fff";

         $.ajax({

          url:"cod.php",
          method:"POST",
          data:{nm:nm1,tab:add1,no:no1,pin:pin1},
          success:function(data){
         $('#resultxc').html(data);

          }

         });
}

</script>



  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/handlebars.min.js?2010435696044133933" type="text/javascript"></script>
  <!-- /snippets/ajax-cart-template.liquid -->



  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/ajax-cart.js?2010435696044133933" type="text/javascript"></script>


  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/fastclick.min.js?2010435696044133933" type="text/javascript"></script>
  <script src="/services/javascripts/currencies.js" type="text/javascript"></script>
<script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/jquery.currencies.min.js?2010435696044133933" type="text/javascript"></script>


  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/main.js?2010435696044133933" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/quickview.js?2010435696044133933" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/wish-list.js?2010435696044133933" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/timber.js?2010435696044133933" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/countdown.js?2010435696044133933" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/collection.js?2010435696044133933" type="text/javascript"></script>
  <script src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/instafeed.min.js?2010435696044133933" type="text/javascript"></script>

 <script>

$('#cart').load("cart_show.php").fadeIn("slow");

</script>


</body>
</html>
