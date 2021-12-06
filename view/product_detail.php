<?php

require('../Controllers/product_controller.php');
session_start();
$product = select_one_product_controller($_GET['PID']);
$item_name=$product['product_name'];
$price=$product['product_price'];
$Description=$product['product_desc'];
$ID= $product['product_id']; 
$category_name= $product['cat_name'];
$ID= $product['product_id']; 
$images=select_images_controller($ID);
$firstItem = reset($images);
$product_image=$firstItem['image_path'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">                                      
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="M_Adnan">
<title>Lux Jade Collection</title>

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

<!-- Bootstrap Core CSS -->
<link href="../css1/Template/bootstrap.min.css" rel="stylesheet">



<link href='../css1/Template/main.css' rel='stylesheet'>
<link href='../css1/Template/style.css' rel='stylesheet'>
<link href='../css1/Template/responsive.css' rel='stylesheet'>


<!-- JavaScripts -->
<script src="../js/Template/modernizr.js"></script>

<!-- Google Web Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" />


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
    if (isset($_SESSION['ID'] )) {
        include_once 'menu.php';
    } else {
        include_once 'another_menu.php';
    }
?>
 
  
  <!-- Content -->
  <div id="content"> 
    
    <!-- Popular Products -->
    <section class="padding-top-100 padding-bottom-100">
      <div class="container"> 
        
        <!-- SHOP DETAIL -->
        <div class="shop-detail">
          <div class="row"> 
            
            <!-- Popular Images Slider -->
            <form action = "../Actions/cart_action.php" method ="get">
            <div class="col-md-7"> 
              <?php 
              
              echo "
              <!-- Images Slider -->
              <div class='images-slider>
                <ul class='slides'>
                  <li data-thumb='$product_image'> <img class='img-responsive' src='$product_image'  alt=''> </li>
                  <input class='form-control' type='hidden'  name='ID' value='$ID'>
                
                </ul>
              </div>
            </div>
            
            <!-- COntent -->
            <div class='col-md-5'>
              <h4>$item_name</h4>
              <ul class='item-owne'>
                <li>Category :<span> $category_name</span></li>
                
              </ul>
              
              <!-- Item Detail -->
              <p><span >Any specific requirements you would like with the package? Eg handrwitten card, specific gift bag wrapping preferences?</span></p>
              <input  type='text' name='details' placeholder='I would like...'>
              <p> The Image is available in the following sizes:<br> 36*24 - Ksh 4,000 <br>4*3- Ksh 10,00 <br> 25*18- Ksh 1,500 </p>
              <!-- Short By -->
              <div class='some-info'>
                <ul class='row margin-top-30'>
                  <li class='col-xs-4'>
                    <div class='quinty'>
                    <p> Please select the size you want the painting in before you add to cart</p>
                      <!-- QTY -->
                      <select  name= 'size' required>
                        <option value='1'> size 25*18</option>
                        <option value='2'>size 36*24</option>
                        <option value='3'>size 4*3</option>
                      </select>
                    </div>
					
                  </li> ";?>
               <li class="col-xs-6"> <button type="submit" name='cart' id ='cart' class="btn"> Add to Cart </button> </li>  
              </ul>
               
            </form>
          </div>
                <br>
                <!-- INFOMATION -->
                 <!-- INFOMATION -->
                 <div class="inner-info">
                  <h6>DELIVERY INFORMATION</h6>
                  <p>Delivery details  
                    will be confirmed when confirming order. You can choose to pick it from select locations or we will deliver it to you </p>
                  
                  <h6>SHARE THIS PRODUCT</h6>
                  
                  <!-- Social Icons -->
                  <ul class="social_icons">
                  <li><a href="https://twitter.com/lux_jade_"><i class="fab fa-twitter"></i> </a></li>
                    <li><a href="https://www.facebook.com/luxJadeCollection/"><i class="fab fa-facebook"></i> </a></li>
                    <li><a href="https://www.instagram.com/lux_jade_collection/?hl=en"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                
                  <?php
                  if (isset($_GET["error"]) && $_GET["error"]==0)
                    echo ' <div class="alert alert-danger" role="alert"> The item was not successfully added to cart, please try again</div>' ;
                   
					
                ?>
                </div>
              
          </div>
        </div>
        
        <!--======= PRODUCT DESCRIPTION =========-->
        <div class="item-decribe"> 
          <!-- Nav tabs -->
          <ul class="nav nav-tabs animate fadeInUp" data-wow-delay="0.4s" role="tablist">
            <li role="presentation" class="active"><a href="#descr" role="tab" data-toggle="tab">DESCRIPTION</a></li>
            
          </ul>
          
          <!-- Tab panes -->
          <div class="tab-content animate fadeInUp" data-wow-delay="0.4s"> 
            <!-- DESCRIPTION -->
            <div role="tabpanel" class="tab-pane fade in active" id="descr">
               <?php echo"<p>$Description <br>"; ?>
              </p>
              
          
              
            
            </div>
         
          </div>
		  </div>
        </div>
      </div>
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

<!-- Jquery -->
<script src="../js/cart/jquery.min.js"></script>
    <script src="../js/cart/jquery-migrate-3.0.0.js"></script>
	<script src="../js/cart/jquery-ui.min.js"></script>
	<!-- Popper js -->
	<script src="../js/cart/popper.min.js"></script>
	<!-- Bootstrap js -->
	<script src="../js/cart/bootstrap.min.js"></script>
	<!-- Color js -->
	<script src="../js/cart/colors.js"></script>
	<!-- Slicknav js -->
	<script src="../js/cart/slicknav.min.js"></script>
	<!-- Owl Carousel js -->
	<script src="../js/cart/owl-carousel.js"></script>
	<!-- Magnific Popup js -->
	<script src="../js/cart/magnific-popup.js"></script>
	<!-- Waypoints js -->
	<script src="../js/cart/waypoints.min.js"></script>
	<!-- Countdown js -->
	<script src="../js/cart/finalcountdown.min.js"></script>
	<!-- Nice Select js -->
	<script src="../js/cart/nicesellect.js"></script>
	<!-- Flex Slider js -->
	<script src="../js/cart/flex-slider.js"></script>
	<!-- ScrollUp js -->
	<script src="../js/cart/scrollup.js"></script>
	<!-- Onepage Nav js -->
	<script src="../js/cart/onepage-nav.min.js"></script>
	<!-- Easing js -->
	<script src="../js/cart/easing.js"></script>
	<!-- Active js -->
	<script src="../js/cart/active.js"></script>
</body>
</html>