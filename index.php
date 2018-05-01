<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>BeGoodMom Catering</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
            <link href="main.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href="assets/css/index.css" rel="stylesheet" type="text/css">

    </head>
  <body>
       <?php 
//            $_SESSION['displayname'] = "Aehyang Park";
            if(isset($_SESSION['displayname'])) {
                $greeting = $_SESSION['displayname'].'&nbsp;&nbsp;'.'<a href="logout.php">Sign out</a>';
            } else {
                $greeting ='<a href="login.php">Sign in</a>';
            } ?>
            <h2> Hello, <?php echo $greeting;?> </h2>    
            <h4>Forgot <a style="color: dimgray" href="http://localhost:8080/Final/reset.php">Password? </a> <?php echo '&nbsp;'; ?> <a href='register.php'>Sign up</a> </h4> 
 <header>    
    <section class="navbar">
      <div class="wrapper dropdown">
        <div class="brand">
          <!--<a href=""><img src="https://bytebucket.org/consatanos/pen-picture/raw/3c0be7f1f1ea380d9165eb09d5c0f1ec921448f2/f-r/img/logo.png" alt="logo"></a>-->
          <button onclick="toggle_visibility('menu_toggle')" id="menu_button">Menu</button>
        </div>
        <nav>
          <a href="">Home</a>
          <a href="">Menu</a>
          <a href="">Pages</a>
          <a href="">Delivery</a>
          <a href="">News</a>
<!--          <a href="">Features</a>-->
          <a href="">Table Booking</a>
        </nav>
        <nav id="menu_toggle">
          <a href="">Home</a>
          <a href="">Menu</a>
          <a href="">Pages</a>
          <a href="">Delivery</a>
          <a href="">News</a>
<!--          <a href="">Features</a>-->
          <a href="">Table Booking</a>
        </nav>
      </div>
    </section>
  </header>  
             
            
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="product-item">
              <div class="pi-img-wrapper">
                  <img src="./assets/images/menu/spicychickenbites.jpg" class="img-responsive" alt="Spicy chicken bites">
                <div>
                  <a href="#" class="btn">Zoom</a>
                  <a href="#" class="btn">View</a>
                </div>
              </div>
              <h3><a href="shop-item.html">Spicy chicken bites (40pcs)</a></h3>
              <div class="pi-price">$29.00</div>
              <a href="javascript:;" class="btn add2cart">Add to cart</a>
              <div class="sticker sticker-new"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-item">
              <div class="pi-img-wrapper">
                  <img src="./assets/images/menu/mildhickenbites.jpg" class="img-responsive" alt="Berry Lace Dress">
                <div>
                  <a href="#" class="btn">Zoom</a>
                  <a href="#" class="btn">View</a>
                </div>
              </div>
              <h3><a href="shop-item.html">Mild chicken bites (40pcs)</a></h3>
              <div class="pi-price">$29.00</div>
              <a href="javascript:;" class="btn add2cart">Add to cart</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-item">
              <div class="pi-img-wrapper">
                  <img src="./assets/images/menu/pokibowl.jpg" class="img-responsive" alt="Berry Lace Dress">
                <div>
                  <a href="#" class="btn">Zoom</a>
                  <a href="#" class="btn">View</a>
                </div>
              </div>
              <h3><a href="shop-item.html">Poki bowl</a></h3>
              <div class="pi-price">$29.00</div>
              <a href="javascript:;" class="btn add2cart">Add to cart</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="product-item">
              <div class="pi-img-wrapper">
                  <img src="./assets/images/menu/panfriedspicypork.jpg" class="img-responsive" alt="Spicy chicken bites">
                <div>
                  <a href="#" class="btn">Zoom</a>
                  <a href="#" class="btn">View</a>
                </div>
              </div>
              <h3><a href="shop-item.html">Pan fried spicy pork</a></h3>
              <div class="pi-price">$15.00</div>
              <a href="javascript:;" class="btn add2cart">Add to cart</a>
              <div class="sticker sticker-new"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-item">
              <div class="pi-img-wrapper">
                  <img src="./assets/images/menu/halfmildhalfspicy.jpg" class="img-responsive" alt="Berry Lace Dress">
                <div>
                  <a href="#" class="btn">Zoom</a>
                  <a href="#" class="btn">View</a>
                </div>
              </div>
              <h3><a href="shop-item.html">Half mild half spicy chicken bites (40pcs)</a></h3>
              <div class="pi-price">$29.00</div>
              <a href="javascript:;" class="btn add2cart">Add to cart</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-item">
              <div class="pi-img-wrapper">
                  <img src="./assets/images/menu/dip_spicy.jpg" class="img-responsive" alt="Berry Lace Dress">
                <div>
                  <a href="#" class="btn">Zoom</a>
                  <a href="#" class="btn">View</a>
                </div>
              </div>
              <h3><a href="shop-item.html">Spicy dipping sauce (5oz)</a></h3>
              <div class="pi-price">$5.00</div>
              <a href="javascript:;" class="btn add2cart">Add to cart</a>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<center>
<strong>Powered by <a href="http://j.mp/metronictheme" target="_blank">KeenThemes</a></strong>
</center>

<?php
include('footer.php');
?>
   
        
        
        
    </body>
 
   
</html>
