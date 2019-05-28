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

<!doctype html>
 <html class="no-js" lang="en"> <!--<![endif]-->

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <link rel="shortcut icon" href="oxygen credit/s/files/1/1485/6894/files/favicon_32x32e686.png?v=1519211374" type="image/png">



  <title>
  Your Shopping Cart



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



<script defer="defer" integrity="sha256-qhF2cfCYNFAl0umvIOrU7EMiySlENmgKI12SDbDaDWY=" crossorigin="anonymous" src="cdn.shopify.com/s/assets/storefront/express_buttons-aa117671f098345025d2e9af20ead4ec4322c9294436680a235d920db0da0d66.js"></script>
<script defer="defer" integrity="sha256-NfqRkSQwKw0JfNupCky6Zxtoijw8YUA8km/3gYu7kY8=" crossorigin="anonymous" src="cdn.shopify.com/s/assets/storefront/features-35fa919124302b0d097cdba90a4cba671b688a3c3c61403c926ff7818bbb918f.js"></script>

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




  <div class="container container-ver2">
    <div class="row">
      <div class="col-md-8">
        <h3>Shopping Cart</h3>
        <div class="cart-box-container cart-box-cart-container">

         <?php
include("db.php");

$cart_s="SELECT * FROM cart WHERE user_id='$ip_add' and pro_qnt!='0'"or die(mysqli_error($con));
$cart_q=mysqli_query($con,$cart_s)or die(mysqli_error($con));
$cartcnt=mysqli_num_rows($cart_q);
if($cartcnt==0){
  echo "<script>window.open('cartempty.php','_self')</script>";
  exit();
}
while($cart_f=mysqli_fetch_array($cart_q)){
$p_id=$cart_f['product_id'];
$qnt=$cart_f['pro_qnt'];

$cart_s1="SELECT * FROM product WHERE id='$p_id'"or die(mysqli_error($con));
$cart_q1=mysqli_query($con,$cart_s1)or die(mysqli_error($con));
$cart_f1=mysqli_fetch_array($cart_q1);
$id=$cart_f1['id'];
$img=$cart_f1['img1'];
$nm=$cart_f1['nm'];
$pri=$cart_f1['price'];



?>
          <form  method="POST" novalidate>
            <div class="box cart-container">

              <table class="table cart-table space-30">

                <tbody>

                  <tr class="item_cart">
                    <td class="product-photo"><img  src="product/<?php echo $img;?>" alt="Zantedeschia Calla"></td>
                    <td class="produc-name">
                      <a href="/products/zantedeschia-calla?variant=362516676625"><?php echo $nm;?></a></br></br>
                       <input type="hidden" value="<?php echo $id;?>" id="p_id<?php echo $id;?>">
              <button style="width:30px;" class="link-v1 add-cart bg-brand btn-addtocart-b enj-add-to-cart-btn btn-cart" type="button" onClick="add_id<?php echo $id; ?>();" id="submit"><span class="fa fa-plus"></span></button>


              <button style="width:30px;" class="link-v1 add-cart bg-brand btn-addtocart-b enj-add-to-cart-btn btn-cart" type="button" id="ddsubmit<?php echo $id; ?>" onClick="c_id<?php echo $id; ?>();"><span id="ddsubmit<?php echo $id; ?>"></span></button>


              <button style="width:30px;" class="link-v1 add-cart bg-brand btn-addtocart-b enj-add-to-cart-btn btn-cart" type="button" onClick="remove<?php echo $id; ?>();"><span class="fa fa-minus"></span></button>

                    </td>
                    <td class="produc-price">

                      <span class="amount"><span class="fa fa-rupee" id="count<?php echo $id; ?>"> </span></span>


                    </td>
                  </tr>



                </tbody>
              </table>


            </div>
          </form>



<script>
$('#count<?php echo $id; ?>').load("count.php?count=<?php echo $id; ?>").fadeIn("slow");

$('#cart').load("cart_show.php").fadeIn("slow");

$('#ddsubmit<?php echo $id; ?>').load("shop_button.php?id=<?php echo $id; ?>").fadeIn("slow");


function add_id<?php echo $id; ?>(){


    var like_padd= $("#p_id<?php echo $id; ?>").val();

         $.ajax({

          url:"add_more.php",
          method:"POST",
          data:{tab:like_padd},
          success:function(data){
$('#total').load("total.php").fadeIn("slow");
$('#count<?php echo $id; ?>').load("count.php?count=<?php echo $id; ?>").fadeIn("slow");

$('#cart').load("cart_show.php").fadeIn("slow");

$('#ddsubmit<?php echo $id; ?>').load("shop_button.php?id=<?php echo $id; ?>").fadeIn("slow");

          }

         });
}


function remove<?php echo $id; ?>(){


    var rm= $("#p_id<?php echo $id; ?>").val();

         $.ajax({

          url:"remove_count.php",
          method:"POST",
          data:{tab:rm},
          success:function(data){
$('#count<?php echo $id; ?>').load("quantity_count.php?count=<?php echo $id; ?>").fadeIn("slow");
         $('#total').load("shop_total.php").fadeIn("slow");
$('#total').load("total.php").fadeIn("slow");

$('#cart').load("cart_show.php").fadeIn("slow");
$('#count<?php echo $id; ?>').load("count.php?count=<?php echo $id; ?>").fadeIn("slow");

$('#ddsubmit<?php echo $id; ?>').load("shop_button.php?id=<?php echo $id; ?>").fadeIn("slow");
          }

         });
}

</script>



          <?php }?>

          <!-- End cat-box-container -->
        </div>
      </div>
      <div class="col-md-4">
        <div class="item">
          <h3>Cart Totals</h3>
          <div class="item-coupon item-total">

            <div class ="total">
              <span>Subtotal</span>
              <span class="price"><span class="fa fa-rupee" id="total">vh</span></span>
            </div>
          </div>
        </div>
        <div class="item item-button">
          <button type="button" onclick="window.location.href='placeorder.php'" class="text-uppercase">Proceed to Checkout</button>
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
  <script>
    var ajaxCartConfig = {
      cartContainer: '#CartContainer',
      addToCartSelector: '.enj-add-to-cart-btn',
      cartCountSelector: '#CartCount',
      cartCostSelector: '#CartCost',
      moneyFormat: "\u003cspan class=money\u003e${{amount}}\u003c\/span\u003e"
    };
      jQuery(function($) {
      ajaxCart.init(ajaxCartConfig);
    });

    jQuery('body').on('ajaxCart.afterCartLoad', function(evt, cart) {
      // Bind to 'ajaxCart.afterCartLoad' to run any javascript after the cart has loaded in the DOM
      /*   timber.RightDrawer.open(); */
    });
  </script>

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
