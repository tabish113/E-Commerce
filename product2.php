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
  <link rel="canonical" href="index.html">
  
  <link rel="shortcut icon" href="img/logo1.png" type="image/png">
  

  
  <title>
  Trees  Oxygen Credit
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
<meta property="og:url" content="https://plant-store-demo.myshopify.com/">
<meta property="og:title" content="Plant - Gardening & Houseplants Shopify Theme">
<meta property="og:type" content="website">
<meta property="og:description" content="Plant - Gardening &amp; Houseplants Shopify Theme">


<meta name="twitter:site" content="@">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Plant - Gardening & Houseplants Shopify Theme">
<meta name="twitter:description" content="Plant - Gardening &amp; Houseplants Shopify Theme">

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
  <script src="coxygen credit/s/files/1/1485/6894/t/3/assets/jquery.fancybox5419.js?9965371921026575025" type="text/javascript"></script>

  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/owl.carousel.min5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/engo-plugins5419.js?9965371921026575025" type="text/javascript"></script>
  
  

  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/jquery.zoom5419.js?9965371921026575025" type="text/javascript"></script>


  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/store5419.js?9965371921026575025" type="text/javascript"></script>


  <!--  end  -->

  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/engo-theme5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/slick.min5419.js?9965371921026575025" type="text/javascript"></script>
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/jquery.flipster.min5419.js?9965371921026575025" type="text/javascript"></script>


 
</head>

<body class="template-index" style="background:#ffffff">
  <!-- preloader -->
  
  <!-- end preloader -->
  <!--  search  -->
  <div class="engoc-modal-search modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <button type="button" class="close" data-dismiss="modal">
      <img src="img/logo.png">
    </button>
    <div class="modal-dialog modal-lg engoj-ajax-search">
      <div class="modal-content popup-search engoj-search-loading">
        
        <div class="modal-body">
          <div class="input-group">
            <form  method="get" action="/search" role="search">

              <input type="text" class="form-control control-search" value="" autocomplete="off" placeholder="SEARCH" aria-label="SEARCH" name="q" />

              <button class="button_search" type="submit"><img src="cdn.shopify.com/s/files/1/1485/6894/t/16/assets/search-icon-ajax.png?9965371921026575025"></button>
            </form>
          </div><!-- /input-group -->

        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  <!-- search   -->

  
<div>
<?php include("header.php");?>
 

  <div class="page-container" id="PageContainer" style="background:#fff;">
    <main class="main-content" id="MainContent" role="main">
      <!-- BEGIN content_for_index --><div id="shopify-section-1514625029697" class="shopify-section index-section"><div data-section-id="1514625029697" data-section-type="section-slideshow-v3" style=" ">
  
</div>


</div>

</div>

<div id="shopify-section-1514198930452" class="shopify-section index-section">
<div data-section-id="1514198930452" data-section-type="section-product-v3" style=" ">
  <div class="mb-30 ">
    <div class="container container-ver2 product-v2 product-v3">
      <div class="row">    
        <div class="title">
          

          <h3>Trees  Oxygen Credit</h3>
        </div>
        <div class="group-product clearfix">
          
          
<?php
$select="SELECT * FROM product WHERE cat='tree'";
$query=mysqli_query($con,$select);
while($run=mysqli_fetch_array($query)){
  $nm=$run['nm'];
  $img=$run['img1'];
  $mrp=$run['mrp'];
  $price=$run['price'];
  $id=$run['id'];

 
?>





<div class="col-md-3 item-product col-sm-6 col-xs-12 engoc-products">
  <div class="item-inner">
    <div class="product">
      <div class="product-images">
        <a href="product_view.php?id=<?php echo $id;?>" title="House Shape Close">
          <img class="primary_image" src="product/<?php echo $img;?>" alt="<?php echo $nm;?>">
        </a>
      </div>
      
            </br></br></br></br>
      <div class="info-product">
      <center>
        <a href="product_view.php?id=<?php echo $id;?>" title="House Shape Close"><p class="product-title"><?php echo $nm;?> <b style="color:red;">2Pc</b></p></a>            
        
        
        <p class="product-price" style="padding-left: 5px;"><span class="fa fa-rupee"> <?php echo $price;?></span></p>
        </center>
      </div>
    </div>
  </div>
</div>
     <?php }?>     

  
   
       

 
         
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
  <script src="oxygen credit/s/files/1/1485/6894/t/3/assets/instafeed.min5419.js?9965371921026575025" type="text/javascript"></script>

 <script>

$('#cart').load("cart_show.php").fadeIn("slow");

</script>

</body>

</html>
