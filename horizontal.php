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
 <html class="no-js" lang="en"> 
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="theme-color" content="#7796A8">
  
<meta name='description' content='OXYGEN CREDITS   are oxygen emission trading schemes which will be implemented by plantation of oxygen generating house plants and outdoor trees to mitigate the climatic warming and pollutants from air. ' />


  <link rel="shortcut icon" href="img/logo1.png" type="image/png">
 

  
  <title>
  OXYGEN CREDITS
  
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
<meta property="og:site_name" content="Plant - Gardening &amp; Houseplants Shopify Theme">
<meta property="og:url" content="https://plant-store-demo.myshopify.com/pages/about-us">
<meta property="og:title" content="About Us">
<meta property="og:type" content="website">
<meta property="og:description" content="Plant - Gardening &amp; Houseplants Shopify Theme">


<meta name="twitter:site" content="@">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="About Us">
<meta name="twitter:description" content="Plant - Gardening &amp; Houseplants Shopify Theme">

  <link href="oxygen credit/s/files/1/1485/6894/t/26/assets/timber.scss5419.css?9965371921026575025" rel="stylesheet" type="text/css" media="all" />
  <link href="oxygen credit/s/files/1/1485/6894/t/26/assets/theme.scss5419.css?9965371921026575025" rel="stylesheet" type="text/css" media="all" /> 

  <!--  css theme  -->
  <link href="oxygen credit/s/files/1/1485/6894/t/26/assets/style5419.css?9965371921026575025" rel="stylesheet" type="text/css" media="all" />
  <link href="oxygen credit/s/files/1/1485/6894/t/26/assets/owl-slider5419.css?9965371921026575025" rel="stylesheet" type="text/css" media="all" />
  <link href="oxygen credit/s/files/1/1485/6894/t/26/assets/settings5419.css?9965371921026575025" rel="stylesheet" type="text/css" media="all" />

  <!--  end  -->
  <link href="oxygen credit/s/files/1/1485/6894/t/26/assets/engo_plugins5419.css?9965371921026575025" rel="stylesheet" type="text/css" media="all" /> 
  <link href="oxygen credit/s/files/1/1485/6894/t/26/assets/engo_base.scss5419.css?9965371921026575025" rel="stylesheet" type="text/css" media="all" /> 
  <link href="oxygen credit/s/files/1/1485/6894/t/26/assets/slick5419.css?9965371921026575025" rel="stylesheet" type="text/css" media="all" /> 


  <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/14856894/digital_wallets/dialog">

<script id="shopify-features" type="application/json">{"accessToken":"688023a9c7eb556f0358a61bd3c45d00","betas":[],"domain":"plant-store-demo.myshopify.com","shopId":14856894,"smart_payment_buttons_url":"https:\/\/cdn.shopifycloud.com\/payment-sheet\/assets\/latest\/spb.js"}</script>

<script id="__st">var __st={"a":14856894,"offset":-14400,"reqid":"6da48ba6-4a4b-49ae-802e-d15700e11dce","pageurl":"plant-store-demo.myshopify.com\/pages\/about-us","s":"pages-2817622033","u":"0ad033037934","p":"page","rtyp":"page","rid":2817622033};</script>


<script defer="defer" integrity="sha256-qhF2cfCYNFAl0umvIOrU7EMiySlENmgKI12SDbDaDWY=" crossorigin="anonymous" src="oxygen credit/s/assets/storefront/express_buttons-aa117671f098345025d2e9af20ead4ec4322c9294436680a235d920db0da0d66.js"></script>
<script defer="defer" integrity="sha256-NfqRkSQwKw0JfNupCky6Zxtoijw8YUA8km/3gYu7kY8=" crossorigin="anonymous" src="oxygen credit/s/assets/storefront/features-35fa919124302b0d097cdba90a4cba671b688a3c3c61403c926ff7818bbb918f.js"></script>
<script defer="defer" integrity="sha256-c6R1aiZcY3yZh5l1B1muVI5/aLE26Ok+gxMpBK/D0w0=" crossorigin="anonymous" src="oxygen credit/s/assets/storefront/bars/preview_bar_injector-73a4756a265c637c998799750759ae548e7f68b136e8e93e83132904afc3d30d.js"></script>
<link rel="stylesheet" media="screen" href="cdn.shopify.com/s/files/1/1485/6894/t/26/compiled_assets/styles5419.css?9965371921026575025">
<script id="sections-script" defer="defer" data-sections="aboutus-template" src="oxygen credit/s/files/1/1485/6894/t/26/compiled_assets/scripts5419.js?9965371921026575025"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/26/assets/jquery.min5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/assets/themes_support/api.jquery-0ea851da22ae87c0290f4eeb24bc8b513ca182f3eb721d147c009ae0f5ce14f9.js" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/26/assets/modernizr.min5419.js?9965371921026575025" type="text/javascript"></script>
  <!-- swatch   -->
  <script src="oxygen credit/s/files/1/1485/6894/t/26/assets/bootstrap-custom5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/assets/themes_support/option_selection-ea4f4a242e299f2227b2b8038152223f741e90780c0c766883939e8902542bda.js" type="text/javascript"></script>
  <!-- end   -->

  

  <script src="oxygen credit/s/files/1/1485/6894/t/26/assets/bootstrap.min5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/26/assets/theme5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/26/assets/jquery.fancybox5419.js?9965371921026575025" type="text/javascript"></script>

  <script src="oxygen credit/s/files/1/1485/6894/t/26/assets/owl.carousel.min5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/26/assets/engo-plugins5419.js?9965371921026575025" type="text/javascript"></script>
  
  

  <script src="oxygen credit/s/files/1/1485/6894/t/26/assets/jquery.zoom5419.js?9965371921026575025" type="text/javascript"></script>


  <script src="oxygen credit/s/files/1/1485/6894/t/26/assets/store5419.js?9965371921026575025" type="text/javascript"></script>


  <!--  end  -->

  <script src="oxygen credit/s/files/1/1485/6894/t/26/assets/engo-theme5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/26/assets/slick.min5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/26/assets/jquery.flipster.min5419.js?9965371921026575025" type="text/javascript"></script>

<style>
header{
	height:200px;
	text-align:center;
}
.box{
	height:300px;
	background-color:red;
	overflow-x:scroll;
	overflow-y:hidden;
	white-space:nowrap;

}
.box::-webkit-scrollbar{
	display:none;
}
.card-a{
display:inline-block;
	background-color:gray;
	height:300px;
	width:300px;

	
}
.card-b{
	display:inline-block;
	background-color:green;
	height:300px;
	width:300px;

	
}
.card-c{
	display:inline-block;
	background-color:yellow;
	height:300px;
	width:300px;

	
}
.card-d{
	display:inline-block;
	background-color:#000;
	height:300px;
	width:300px;

	
}
.card-e{
	display:inline-block;
	background-color:green;
	height:300px;
	width:300px;

	
}
.card-f{
	display:inline-block;
	background-color:yellow;
	height:300px;
	width:300px;

	
}
</style>

</head>

<body class="template-page" style="background:#ffffff">
  <!-- preloader -->
  
  <!-- end preloader -->
  <!--  search  -->
 
  <!-- search   -->
<header>
<h1>post</h1>
</header>
<div class="box">
<div class="card-a"></div>
<div class="card-b"></div>
<div class="card-c"></div>
<div class="card-d"></div>
<div class="card-e"></div>
<div class="card-f"></div>


</div>

</br>
</br>
</br>
<?php include("footer.php");?>
  

  <script src="oxygen credit/s/files/1/1485/6894/t/26/assets/handlebars.min5419.js?9965371921026575025" type="text/javascript"></script>
  <!-- /snippets/ajax-cart-template.liquid -->

 


  <script src="oxygen credit/s/files/1/1485/6894/t/26/assets/fastclick.min5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/javascripts/currencies.js" type="text/javascript"></script>
<script src="oxygen credit/s/files/1/1485/6894/t/26/assets/jquery.currencies.min5419.js?9965371921026575025" type="text/javascript"></script>


<script type="text/javascript">
  Shopify.doNotTriggerClickOnThumb = false;
</script>



<script>
  $(document).on('click','.overlay, .continue-shopping, .close-window', function() {   
    hidePopup(".engo-popup");
  });
</script>
  

  <script src="oxygen credit/s/files/1/1485/6894/t/26/assets/main5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/26/assets/quickview5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/26/assets/wish-list5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/26/assets/timber5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/26/assets/countdown5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/26/assets/collection5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/26/assets/instafeed.min5419.js?9965371921026575025" type="text/javascript"></script>

 
</body>

</html>
