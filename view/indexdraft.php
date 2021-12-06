<?php
session_start();
require('../Controllers/product_Controller.php');
// return array of all rows, or false (if it failed)
$product = select_all_products_controller();
$category = select_all_categories_controller();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="M_Adnan">
<title>Lux Jade Art Collection</title>

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

<!-- Bootstrap Core CSS -->
<link href="../css/Template/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href='../css/Template/font-awesome.min.css' rel="stylesheet" type="text/css">

<link href='../css/Template/main.css' rel='stylesheet'>
<link href='../css/Template/style.css' rel='stylesheet'>
<link href='../css/Template/responsive.css' rel='stylesheet'>

<script src="https://kit.fontawesome.com/bb731240c4.js" crossorigin="anonymous"></script>

<!-- JavaScripts -->
<script src="../JS/Template/modernizr.js"></script>

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" type='text/css'>


<!-- HTML5 Shim and Respond.js IE8 qsupport of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<!-- LOADER -->
<?php 
  include_once('another_menu.php')
  ?>
  
  <!--======= SUB BANNER =========-->
  <section class="sub-bnr" data-stellar-background-ratio="0.5" background: url(homepage.jpg) no-repeat;>
    <div class="position-center-center">
      <div class="container">
        <h4>Lux Jade Collection</h4>
        <p style="color:#FFFFFF">Lux jade collection introduces acrylic paintings done on canvas, that will capture, please and embraces our hearts.</p>
        
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Popular Products -->
    <section class="shop-page padding-top-100 padding-bottom-100">
      <div class="container">
        <div class="item-display">
          <div class="row">
            <div class="col-xs-6"> <span class="product-num">Showing 1 - 10 of 30 products</span> </div>
            
            <!-- Products Select -->
            <div class="col-xs-6">
              <div class="pull-right"> 
                
                <!-- Short By -->
                <select class="selectpicker">
                  <option>Sort By</option>
                  <option>So By</option>
                  <option>Short By</option>
                </select>
                <!-- Filter By -->
                <select class="selectpicker">
                  <option>Filter By</option>
                  <option>Short By</option>
                  <option>Short By</option>
                </select>
                
                <!-- GRID & LIST --> 
                <a href="#." class="grid-style"><i class="icon-grid"></i></a> <a href="#." class="list-style"><i class="icon-list"></i></a> </div>
            </div>
          </div>
        </div>
        
        <!-- Popular Item Slide -->
        <div class="shop-items row"> 
          <?php 
                  foreach($product as $x){
                  $brand_id=$x['product_brand'];
                  $brand = select_one_brand_controller($brand_id);
                  $brand_name=$brand['brand_name'];
                  $cat_id=$x['product_cat'];
                  $cat = select_one_category_controller($cat_id);
                  $category_name = $cat['cat_name'];
                  $image_file= $x['product_image']; 
                  $image_string= explode("/",$image_file);
                  $image_name= end ($image_string);
                  $item_name=$x['product_title'];
                  $price=$x['product_price'];
                  $item_name=$x['product_title'];
                  $image=$x['product_image'];
                  $PID= $x['product_id'];


                 
          
                    echo "<!-- Item -->
                    <div class='col-md-6'>
                      <div class='item'> 
                        <!-- Item Name -->
                        <div class='item-name'> <a href='#.'>$item_name</a>
                          <p>$brand_name</p>
                          <p>$category_name</p>
                        </div>
                        <!-- Item img -->
                        <div class='item-img'> <img class='img-1'src='$image' alt='' height='400' width='540'> 
                          <!-- Overlay -->
                          <div class='inn'><a href='$image' data-lighter><i class='fas fa-search-plus'></i></a> <a href='product_detail.php?PID=$PID'><i class='fas fa-cart-plus'></i></a> <a href='#.' ><i class='fas fa-heart'></i></a></div>
                        </div>
                        <!-- Price --> 
                        <span class='price'><small>$</small>$price</span> </div>
                    </div>";
                  }
          ?> 
          
        
    </section>
    
    
  
  <!--======= FOOTER =========-->
  <?php include_once("footer.php") ?>
  
  <!--======= RIGHTS =========--> 
  
</div>
<script src="../js/Template/jquery-1.11.3.min.js"></script> 
<script src="../js/Template/bootstrap.min.js"></script> 
<script src="../js/Template/own-menu.js"></script> 
<script src="../js/Template/jquery.lighter.js"></script> 
<script src="../js/Template/owl.carousel.min.js"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="rs-plugin/js/jquery.tp.t.min.js"></script> 
<script type="text/javascript" src="rs-plugin/js/jquery.tp.min.js"></script> 
<script src="../js/Template/main.js"></script> 
<script src="../js/Template/main.js"></script>
</body>
</html>