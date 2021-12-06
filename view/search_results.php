<?php

require('../Controllers/product_Controller.php');
if(isset($_POST['search'])){
$kword= $_POST['search'];
//searches if search term matches any of the titles, keywords, description etc
$keywords= select_product_by_keyword_controller($kword);
// return array of all rows, or false (if it failed)
//searches by title 

function results(){
    global $keywords;
    $kword_len = count( $keywords);
    /*$title_len = count($titles);
    $desc_len  = count($desc);*/
    if ($kword_len != 0 ){
      return 'results' ;
     
    } else {
      return 'no results';
    }
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="M_Adnan">
<title>PAVSHOP - Multipurpose eCommerce HTML5 Template</title>

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="../menu/rs-plugin/css/settings.css" media="screen" />

<!-- Bootstrap Core CSS -->
<link href="../css1/Template/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href='../css1/Template/font-awesome.min.css' rel="stylesheet" type="text/css">

<link href='../css1/Template/main.css' rel='stylesheet'>
<link href='../css1/Template/style.css' rel='stylesheet'>
<link href='../css1/Template/responsive.css' rel='stylesheet'>

<script src="https://kit.fontawesome.com/bb731240c4.js" crossorigin="anonymous"></script>

<!-- JavaScripts -->
<script src="../JS/Template/modernizr.js"></script>

<!-- Online Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" type='text/css'>


<!-- HTML5 Shim and Respond.js IE8 qsupport of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>

<?php 
  include_once('another_menu.php');
  ?>
          
          
  
  <!--======= SUB BANNER =========-->
  <section class="sub-bnr" data-stellar-background-ratio="0.5" no-repeat;>
    <div class="position-center-center">
      <div class="container">
        <h4>PAVSHOP PRODUCTS</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. 
          Sed feugiat, tellus vel tristique posuere, diam</p>
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Data</li>
        </ol>
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
         
          if (results()==='results'){
                  foreach($keywords as $x){
                  $brand_id=$x['product_brand'];
                  $brand_name=$x['brand_name'];
                  $cat_id=$x['product_cat'];
                 
                  $category_name = $x['cat_name'];
                  $image_file= $x['product_image']; 
                  $image_string= explode("/",$image_file);
                  $image_name= end ($image_string);
                  $item_name=$x['product_title'];
                  $price=$x['product_price'];
                  $item_name=$x['product_title'];
                  $image=$x['product_image'];
                  $PID=$x['product_id'];


                 
          
                  echo "<!-- Item -->
                  <div class='col-md-6'>
                    <div class='item'> 
                      <!-- Item Name -->
                      <div class='item-name'> <a href='#.'>$item_name</a>
                        <p>$brand_name</p>
                        <p>$category_name</p>
                      </div>
                      <!-- Item img -->
                      <div class='item-img'> <img class='img-1'src='$image' alt='' > 
                        <!-- Overlay -->
                        <div class='inn'><a href='$image' data-lighter><i class='fas fa-search-plus'></i></a> <a href='product_detail.php?PID=$PID'><i class='fas fa-cart-plus'></i></a> <a href='#.' ><i class='fas fa-heart'></i></a></div>
                      </div>
                      <!-- Price --> 
                      <span class='price'><small>$</small>$price</span> </div>
                   ";}
                  

                   
            }else {
              echo "<div class='item-name'> <a href='../index.php'>No results matched the set criteria</a> </div>
              <div class='item-name'> <a href='../index.php'>Click here to go back to home page</a>
              </div>"; 
              
                }
          
          ?> 
          
              </div>
    </section>
    
    <?php include_once("footer.php") ?>
  
</div>
<script src="../JS/Template/jquery-1.11.3.min.js"></script> 
<script src="../JS/Template/bootstrap.min.js"></script> 
<script src="../JS/Template/own-menu.js"></script> 
<script src="../JS/Template/jquery.lighter.js"></script> 
<script src="../JS/Template/owl.carousel.min.js"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="../menu/rs-plugin/js/jquery.tp.t.min.js"></script> 
<script type="text/javascript" src="../menu/rs-plugin/js/jquery.tp.min.js"></script> 
<script src="../JS/Template/main.js"></script> 
<script src="../JS/Template/main.js"></script>
</body>
</html>