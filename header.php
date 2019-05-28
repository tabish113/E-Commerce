 <div id="shopify-section-header" class="shopify-section">
  
  
  <header id="header" class="header-v3 header-v2 plant-header-v1" >
  <div class="header-top">
    <div class="container ">
      <div class="box">
        <p class="icon-menu-mobile"><i class="fa fa-bars" ></i></p>
        <div class="box-right">
          <div class="cart hover-menu">
            <a href="cart.php" class="icon-cart">
              Cart <span>(<span id="cart"></span>)</span>
            </a>
            
          </div>
          <div class="search dropdown" data-toggle="modal" data-target=".bs-example-modal-lg">
            <i class="icon"></i>
          </div>
        </div>
        <div class="logo">
          <a href="index.php"><img src="img/logo1.png" alt="" width="127px" /></a>
        </div>
        <div class="logo-mobile"><a href="index.php"><img  alt="" width="127px"  /></a></div>
        
        <nav class="mega-menu">
  <!-- Brand and toggle get grouped for better mobile display -->
  <ul class="nav navbar-nav" id="navbar">
    
   
                  
                  <li class="level1 dropdown">
                    <a href="index.php">Home</a>

                  </li>
           
    
      <li class="level1 ">
        <a href="about.php">About</a>
      </li>
             
             
            
    
      <li class="level1 ">
        <a href="contact.php">Contact</a>
      </li>

<?php
if(!isset($_SESSION['cno'])){?>
   
      <li class="level1 ">
        <a href="log.php">Login</a>
      </li>
     <?php }?>
    
    <?php
if(isset($_SESSION['cno'])){?>
   
      <li class="level1 ">
        <a href="wallet.php">Wallet</a>
      </li>
       <li class="level1 ">
        <a href="logout.php">Logout</a>
      </li>
     <?php }?>
    
    
  </ul>
</nav>

      </div>                
    </div>
    <!-- End container -->
  </div>
  <!-- End header-top -->
</header>
  
  


</div>