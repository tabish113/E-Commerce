<?php
include("db.php");
session_start();
$sen=@$_SESSION['cno'];
$senid="test";

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
  <div class="engoc-modal-search modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <button type="button" class="close" data-dismiss="modal">
      <img src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/search-close-icon.png?2010435696044133933">
    </button>
    <div class="modal-dialog modal-lg engoj-ajax-search">
      <div class="modal-content popup-search engoj-search-loading">

        <div class="modal-body">
          <div class="input-group">
            <form  method="get" action="/search" role="search">

              <input type="text" class="form-control control-search" value="" autocomplete="off" placeholder="SEARCH" aria-label="SEARCH" name="q" />

              <button class="button_search" type="submit"><img src="//cdn.shopify.com/s/files/1/1485/6894/t/3/assets/search-icon-ajax.png?2010435696044133933"></button>
            </form>
          </div><!-- /input-group -->

        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  <!-- search   -->



  <div>

 <?php include("header.php"); ?>
 <?php include("db.php"); ?>



<?php
$id1=$_GET['id'];
$select="SELECT * FROM product WHERE id='$id1'";
$query=mysqli_query($con,$select);
$run=mysqli_fetch_array($query);
  $nm=$run['nm'];
  $img=$run['img1'];
  $mrp=$run['mrp'];
  $price=$run['price'];
  $id=$run['id'];

  $feature=$run['feature'];



?>


  <div class="page-container" id="PageContainer">
    <main class="main-content" id="MainContent" role="main">


<div id="shopify-section-product-template" class="shopify-section"><!-- /templates/product.liquid -->



<div class="main-content" itemscope itemtype="http://schema.org/Product">


  <div class="container">
    <div class="product-details-content">
      <div class="col-md-6 col-sm-6">
        <div class="slider slider-single">

          <a href="javascript:void(0)" class="zoom">
            <img class="engoj_img_main" src="product/<?php echo $img;?>" alt="images">
          </a>

        </div>


        <!-- End slider-for -->

      </div>
      <div class="col-md-6 col-sm-6">
        <div class="box-details-info"  itemprop="offers" itemscope itemtype="http://schema.org/Offer">
          <meta itemprop="priceCurrency" content="USD">
          <link itemprop="availability" href="http://schema.org/InStock">

          <div class="product-name">
            <h1 itemprop="name"><?php echo $nm;?></h1>
          </div>
          <!-- End product-name -->
          <div class="rating">
            <div class="overflow-h">
              <div class="icon-rating">
                <span class="shopify-product-reviews-badge" data-id="38925533201"></span>
              </div>
            </div>
          </div>
          <!-- End Rating -->
          <div class="wrap-price">


            <p class="price" id="ProductPrice" itemprop="price"> Price : <span class="fa fa-rupee"> <?php echo $price;?></span></p>

          </div>
          <!-- End Price -->
        </div>
</br>
        <!-- End box details info -->
          <form method="POST" action="/cart/add" id="AddToCartForm" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data">
          <div class="options">

            <!--End Description-->

            <!-- End row -->
            <div class="action">
              <input type="hidden" value="<?php echo $id;?>" id="p_id<?php echo $id;?>">
              <button style="width:50%;" class="link-v1 add-cart bg-brand btn-addtocart-b enj-add-to-cart-btn btn-cart" type="button" onClick="add_id<?php echo $id; ?>();" id="submit"><span class="fa fa-plus"></span></button>


              <button style="width:50%;" class="link-v1 add-cart bg-brand btn-addtocart-b enj-add-to-cart-btn btn-cart" type="button" id="ddsubmit<?php echo $id; ?>" onClick="c_id<?php echo $id; ?>();"><span id="ddsubmit<?php echo $id; ?>"></span></button>


              <button style="width:50%;" class="link-v1 add-cart bg-brand btn-addtocart-b enj-add-to-cart-btn btn-cart" type="button" onClick="remove<?php echo $id; ?>();"><span class="fa fa-minus"></span></button>

            </div>



          </div>
        </form>
        <!-- End Options -->



          <div class="accordion box space-100">
          <!-- Accordion v2 -->
          <div class="accordion accordion-v2">
            <div class="panel-group" id="accordion-v2">

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a>
                      Feature
                    </a>
                  </h4></br>
                  <h4 style="color:red;">Pot is not the part of plants</h4>
                </div>
                <div id="collapse-v2-One" class="panel-collapse active collapse in">
                  <div class="panel-body">
                    <p><?php echo $feature; ?></p>
                  </div>
                </div>
              </div>


            </div>
          </div>
          <!-- End Accordion v2 -->

          <!-- End share -->
        </div>
        <!-- End col-md-6 -->
      </div>
    </div>
    <!-- End product-details-content -->

    <!-- tab-container -->


    <!-- End title -->


  </div>
  <!-- End container -->
</div>
<script>
$('#cart').load("cart_show.php").fadeIn("slow");

$('#ddsubmit<?php echo $id; ?>').load("shop_button.php?id=<?php echo $id; ?>").fadeIn("slow");

function c_id<?php echo $id; ?>(){
$('#ddsubmit<?php echo $id; ?>').load("load.php?id=<?php echo $id; ?>").fadeIn("slow");


    var likep= $("#p_id<?php echo $id; ?>").val();

         $.ajax({

          url:"shop_cart.php",
          method:"POST",
          data:{tab:likep},
          success:function(data){
            $('#res').text(data);
$('#ddsubmit<?php echo $id; ?>').load("shop_button.php?id=<?php echo $id; ?>").fadeIn("slow");
$('#cart').load("cart_show.php").fadeIn("slow");
          }

         });
}


function add_id<?php echo $id; ?>(){


$('#ddsubmit<?php echo $id; ?>').load("load.php?id=<?php echo $id; ?>").fadeIn("slow");

    var like_padd= $("#p_id<?php echo $id; ?>").val();

         $.ajax({

          url:"add_more.php",
          method:"POST",
          data:{tab:like_padd},
          success:function(data){

$('#cart').load("cart_show.php").fadeIn("slow");

$('#ddsubmit<?php echo $id; ?>').load("shop_button.php?id=<?php echo $id; ?>").fadeIn("slow");

          }

         });
}


function remove<?php echo $id; ?>(){

$('#ddsubmit<?php echo $id; ?>').load("load.php?id=<?php echo $id; ?>").fadeIn("slow");


    var rm= $("#p_id<?php echo $id; ?>").val();

         $.ajax({

          url:"remove_count.php",
          method:"POST",
          data:{tab:rm},
          success:function(data){
$('#count<?php echo $id; ?>').load("quantity_count.php?count=<?php echo $id; ?>").fadeIn("slow");
         $('#total').load("shop_total.php").fadeIn("slow");
  $('#limit').load("limit_place.php").fadeIn("slow");

$('#cart').load("cart_show.php").fadeIn("slow");

$('#ddsubmit<?php echo $id; ?>').load("shop_button.php?id=<?php echo $id; ?>").fadeIn("slow");
          }

         });
}

</script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('.slider-single').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: false,
      adaptiveHeight: true,
      infinite: false,
      useTransform: true,
      speed: 400,
      cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
    });

    $('.slider-nav')
    .on('init', function(event, slick) {
      $('.slider-nav .slick-slide.slick-current').addClass('is-active');
    })
    .slick({
      slidesToShow: 3,
      slidesToScroll: 3,
      dots: false,
      arrows: false,
      focusOnSelect: false,
      infinite: false
    });

    $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
      $('.slider-nav').slick('slickGoTo', currentSlide);
      var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
      $('.slider-nav .slick-slide.is-active').removeClass('is-active');
      $(currrentNavSlideElem).addClass('is-active');
    });

    $('.slider-nav').on('click', '.slick-slide', function(event) {
      event.preventDefault();
      var goToSingleSlide = $(this).data('slick-index');

      $('.slider-single').slick('slickGoTo', goToSingleSlide);
    });



    $('.zoom').zoom();

  });
</script>

</div>



    </main>
  </div>

  <div id="back-to-top">
    <i class="fa fa-long-arrow-up"></i>
  </div>

  <?php include("footer.php");?>
  </div>

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



</body>
</html>
