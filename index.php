<?php
include("db.php");
session_start();

$senid="test";

 $ckselect="SELECT * FROM register where logs='$senid' and logs!='' and logs!='0' ";

$cokrun1=mysqli_query($con,$ckselect) or die(mysqli_error($con));

$cokfetch=mysqli_fetch_array($cokrun1);

$cokck=mysqli_num_rows($cokrun1);

$coksen=$cokfetch['cno'];

$coklog=$cokfetch['logs'];

if($cokck=='1' and $coklog==$senid){

    $_SESSION['cno']=$coksen;

}



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
if($senid=="0"){
  $ip_add=get_ip();
}else{
  $ip_add=$senid;
}


?>



<!doctype html>

 <html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="theme-color" content="#7796A8">
  <link rel="canonical" href="index.html">


<meta name='keywords' content='oxygen credit,oxigen services , oxigen services, oxigen wallet sign up offers, oxigen retailer login, xigen wallet virtual card not working,OXYGEN CREDITS ON HOUSEPLANT , OXYGEN CREDITS ON OUTDOOR TREES, HOUSEPLANT, trees,Areca Palm,Dracaena Janet Craig,Lady Palm,Mother in Law Tongue,Spider Plant,Peace Lily, ' />

<meta name='description' content='OXYGEN CREDITS   are oxygen emission trading schemes which will be implemented by plantation of oxygen generating house plants and outdoor trees to mitigate the climatic warming and pollutants from air. ' />


  <link rel="shortcut icon" href="img/logo1.png" type="image/png">



  <title>
  OXYGEN CREDITS

  </title>



  <!-- font -->


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


  <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/14856894/digital_wallets/dialog">

<script id="shopify-features" type="application/json">{"accessToken":"688023a9c7eb556f0358a61bd3c45d00","betas":[],"domain":"plant-store-demo.myshopify.com","shopId":14856894,"smart_payment_buttons_url":"https:\/\/cdn.shopifycloud.com\/payment-sheet\/assets\/latest\/spb.js"}</script>

<script defer="defer" integrity="sha256-qhF2cfCYNFAl0umvIOrU7EMiySlENmgKI12SDbDaDWY=" crossorigin="anonymous" src="oxygen credit/s/assets/storefront/express_buttons-aa117671f098345025d2e9af20ead4ec4322c9294436680a235d920db0da0d66.js"></script>
<script defer="defer" integrity="sha256-NfqRkSQwKw0JfNupCky6Zxtoijw8YUA8km/3gYu7kY8=" crossorigin="anonymous" src="oxygen credit/s/assets/storefront/features-35fa919124302b0d097cdba90a4cba671b688a3c3c61403c926ff7818bbb918f.js"></script>
<link rel="stylesheet" media="screen" href="oxygen credit/s/files/1/1485/6894/t/3/compiled_assets/styles5419.css?9965371921026575025">
<script id="sections-script" defer="defer" data-sections="f-section-product-v1,section-video,section-newsletter-v1" src="oxygen credit/s/files/1/1485/6894/t/3/compiled_assets/scripts5419.js?9965371921026575025"></script>
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

<style>
p{text-align:justify;}
span{text-align:justify;}

</style>
</head>

<body class="template-index" style="background:#ffffff">
  <!-- preloader -->

  <!-- end preloader -->

<?php include("header.php");?>




  <div>



  <div class="page-container" id="PageContainer" style="background:#fff; margin-top:-4.5%;">
    <main class="main-content" id="MainContent" role="main">
      <!-- BEGIN content_for_index -->

    <!-- Indicators -->

    <!-- Wrapper for slides -->

  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->


    <!-- Wrapper for slides -->

    <div class="carousel-inner" >
      <div class="item active">
        <img src="slider/1.jpg"  style="width:100%; " >

      </div>
      <div class="item">
        <img src="slider/2.jpg"  style="width:100%; " >

      </div>

      <div class="item">
        <img src="slider/4.jpg"  style="width:100%; " >

      </div>




    <!-- Left and right controls -->

  </div>
</div>

 <center> <a href="product.php" class="btn btn-primary " style="background:#fff;  color:orange; border-color:red; border-width:100px;" >
 Buy Grow Protect Earn</a></center>

<div id="shopify-section-1513848004086" class="shopify-section index-section"><div data-section-id="1513848004086" data-section-type="section-info-v1" style=" ">

  <div class="container info-v1">
    <div class="container container-ver2 ">
      <div class="row">


          <p><b>OXYGEN CREDITS</b>  are oxygen emission trading schemes which will be implemented by plantation of oxygen generating house plants and outdoor trees to mitigate the climatic warming and pollutants from air. </p>
</br>

<div id="data">
   <center><img src="img/2.gif" onClick="data();" style="width:10%;"> </center>
        </div>
      </div>
    </div>
  </div>
</div>


<script>


function data(){
 $('#data').load("data.php").fadeIn("slow");

}
 </script>



<center><h3>our products</h3></center>
</div><div id="shopify-section-1514282934201" class="shopify-section index-section"><div data-section-id="1514282934201" data-section-type="section-banner-v2" style=" ">
  <div class="mb-30">
    <div class="container banner-v2">

      <div class="row no-gutters">

        <div class="col-md-6 col-sm-6 col-xs-6 item-banner-l">
          <div class="img-banner">
            <a href="product.php" class="hover-images">
              <img class="img-responsive" src="img/oxy1.jpg" alt="">
            </a>
          </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-6 item-banner-l">
          <div class="img-banner">
            <a href="product2.php" class="hover-images">
              <img class="img-responsive" src="img/oxy2.png" alt="">
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>






</div>
</br>
 <center> <h3 >Current Facts</h3></center></br></br>
 <div class="container container-ver2" style="margin-top:-100px;">

  <div class="row">

    <div class="js-ajax-post-wrapper engoc-row-equal layout-blog-v1-wrapper">

      <div class="col-md-4 col-sm-6">
        <div class="blog-post-main">

          <a href="blog1.php">
            <img src="img/apol.jpg" class="img-responsive">
          </a>
          <div class="post-metas">
            <div class="categories">

                    <a href="blog1.php" title="Show articles tagged FLOWERS"><h3>Air pollution </h3></a>


            </div>

          </div>

        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="blog-post-main">
          <a href="blog_planet.php">
            <img src="img/ap.jpg" class="img-responsive">
          </a>
          <div class="post-metas">
            <div class="categories">

                    <a href="blog_planet.php" title="Show articles tagged FLOWERS"><h3>Our Planet</h3></a>

            </div>

          </div>

        </div>
      </div>


      <div class="col-md-4 col-sm-6">
        <div class="blog-post-main">
          <a href="blog_hyp.php">
            <img src="img/asad.jpg" class="img-responsive">
          </a>
          <div class="post-metas">
            <div class="categories">

                    <a href="blog_hyp.php" title="Show articles tagged FLOWERS"><h3>Oxygen Hypoxia</h3></a>


            </div>

          </div>

        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="blog-post-main">
          <a href="blog_res.php">
            <img src="img/ass.jpg" class="img-responsive">
          </a>
          <div class="post-metas">
            <div class="categories">

                    <a href="blog_res.php" title="Show articles tagged FLOWERS"><h3>Resuscitation</h3></a>

            </div>

          </div>

        </div>
      </div>



    </div>




  </div>
</div>



</div>




</div>



</div><!-- END content_for_index -->

    </main>
  </div>

  <div id="back-to-top">
    <i class="fa fa-long-arrow-up"></i>
  </div>

<?php include("footer.php");?>

  </div>


  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/handlebars.min5419.js?9965371921026575025" type="text/javascript"></script>
  <!-- /snippets/ajax-cart-template.liquid -->



  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/ajax-cart5419.js?9965371921026575025" type="text/javascript"></script>

  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/fastclick.min5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/javascripts/currencies.js" type="text/javascript"></script>
<script src="oxygen credit/s/files/1/1485/6894/t/3/assets/jquery.currencies.min5419.js?9965371921026575025" type="text/javascript"></script>




<script>
  $(document).on('click','.overlay, .continue-shopping, .close-window', function() {
    hidePopup(".engo-popup");
  });
</script>




  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/main5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/quickview5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/wish-list5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/timber5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/countdown5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/collection5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/instafeed.min5419.js?9965371921026575025" type="text/javascript">


  </script>



<script>

$('#cart').load("cart_show.php").fadeIn("slow");

</script>

</body>

</html>
