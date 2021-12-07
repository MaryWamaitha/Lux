<?php

require('../Controllers/product_Controller.php');
if(isset($_GET['search'])){
$kword= $_GET['kword'];
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
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>N. Agenecy</title>
    
    <meta name="description" content="N.Agency - Responisve Landing Page for Agency">
    <meta name="keywords" content="">
    <meta name="author" content="tabthemes">
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="../img/favicon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="../img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../img/apple-touch-icon-114x114.png">
    
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" />
    <link href="css/Template/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href='../css1/Template/font-awesome.min.css' rel="stylesheet" type="text/css">
    <link href='../css1/Template/ionicons.min.css' rel='stylesheet'>
    <link href='../css1/Template/main.css' rel='stylesheet'>
    <link href='../css1/Template/style.css' rel='stylesheet'>
    <link href='../css1/Template/responsive.css' rel='stylesheet'>
    <!-- JavaScripts -->
<script src="../JS/Template/modernizr.js"></script>
    
    <!-- Bootstrap CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- CSS Files For Plugin -->
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="../css/magnific-popup.css" rel="stylesheet" />
    <link href="../css/YTPlayer.css" rel="stylesheet" />
    
    
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="portfolio_page_2col" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="100">
    

    <?php 
    if (isset($_SESSION['ID'] )) {
        include_once 'menu.php';
    } else {
        include_once 'another_menu.php';
    }
    ?>
    
    <!-- Start Navigation -->
    
    
    <!-- Section Title Portfolio -->
    <div class="section-title-bg text-center">
        <h2 class="wow fadeInDown no-margin" data-wow-duration="1s" data-wow-delay="0.6s"><strong>Portfolio</strong></h2>
        <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
        <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">Check out what we have done so far and if you love it, add it to your collection!</p>
    </div>


    <!-- Start Portfolio -->
    <section id="portfolio" class="p-top-80 p-bottom-80">
        <div class="container">
           
            <!-- Portfolio-filter -->
            <ul class="pf-filter pf-filter-gray text-center list-inline">
                <li><a href="#" data-filter="*" class="iso-active iso-button">All</a></li>
                <li><a href="#" data-filter=".Landscapes" class="iso-button">Landscape and Nature</a></li>
                <li><a href="#" data-filter=".Animals" class="iso-button">Animals</a></li>
                <li><a href="#" data-filter=".Potraits" class="iso-button">Potraits and People</a></li>
                <form >
                    <input type="search" placeholder="Search" name='search' id='search' required>
                    <button type="submit"><i class='fas fa-search'></i></button>
                </form> 

            </ul>          

            <!-- Portfolio -->
            <div class="portfolio portfolio-isotope col-2 gutter">

                                 <?php 
                                    if (results()==='results'){
                                      foreach ($keywords as $x){
                                          $category_name = $x['cat_name'];
                                          $productID=$x['product_id'];
                                          $item_name=$x['product_name'];
                                          $price=$x['product_price'];
                                          $PID= $x['product_id']; 
                                          $images=select_images_controller($PID);
                                          $firstItem = reset($images);
                                          $image_file=$firstItem['image_path'];
                                          $image_string= explode("/",$image_file);
                                          $image_name= end ($image_string);
                                          $path="../images/Products/";
                                          $product_image=$path.$image_name;
                                         
                                          ?>
              <!-- Portfolio Item -->
              <div class="pf-item <?php echo $category_name;?>">
                  <a href="<?php echo $product_image ?>" class="pf-style lightbox-image mfp-image">
                      <div class="pf-image">
                          <img src="<?php echo $product_image ?>" alt="" height="500" width="750">
                          <div class="overlay">
                              <div class="overlay-caption">
                                  <div class="overlay-content">
                                      <div class="pf-info white-color">
                                          <h4 class="pf-title"><?php echo $item_name?></h4>
                                          <p><?php echo $category_name ?></p>
                                      </div> <!-- .pf-info -->
                                  </div> <!-- .overlay-content -->
                              </div> <!-- .overlay-caption -->
                          </div> <!-- .overlay -->
                      </div> <!-- .pf-image -->
                    </a>
                  <a href="product_detail.php?PID=<?php echo $productID;?>" class="btn btn-main btn-theme wow fadeInUp" data-wow-delay="0.5s">Add to Cart</a>
                </div>
              <?php }?>
            </div> <!-- Portfolio -->
          <?php }else {
              echo "<div class='item-name'> <a href='shop.php'>No results matched the set criteria</a> </div>
              <div class='btn btn-main btn-theme '> <a href='shop.php'>Click here to go back to the painting shop</a>
              </div>";} ?>
        </div> <!-- /.container -->
    </section>
    <!-- End Portfolio -->

    <!-- Start Call to Action -->
    <section class="light-bg p-top-60 p-bottom-60">
        <div class="container">          
            <div class="row">
                
                <div class="col-xs-12 c2a-content text-center">                   
                    <!-- Text -->
                    <h2 class="wow fadeInDown" data-wow-delay="0.3s">Want to get your own personalized painting?</h2>
                    <p class="m-bottom-30 wow fadeInDown" data-wow-delay="0.4s">Call or WhatsApp us at</p>
                    <!-- Button -->
                    <a href="#" class="btn btn-main btn-theme wow fadeInUp" data-wow-delay="0.5s">+254 729093709</a>            
                </div> <!-- /.col -->
                
            </div>  <!-- /.row -->          
        </div> <!-- /.container -->
    </section>
    <!-- End Call to Action -->


    <!-- Start Footer -->
    <footer class="site-footer">
    <div class="container1">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<h2 class="footer-heading"><a href="#" class="logo">Lux Jade Collection</a></h2>
                        <h4 style='color:white' ><span> <i class="fas fa-phone-alt"  style='color:white'>  </i> +254 729093709 </span>  </h4>
                        <h4 style='color:white' ><span> <i class="fas fa-envelope"  style='color:white'>  </i> hkarani188@gmail.com </span>  </h4>
                        <br>
						<p class="menu">
							<a href="index.php">Home </a>
							<a href="shop.php">Shop </a>
							<a href="contact.php">Contact  </a>
						</p>
						<ul class="ftco-footer-social p-0">
                            <li ><a href="https://twitter.com/lux_jade_" data-toggle="tooltip" data-placement="top" title="Twitter"><span > <i class="fab fa-twitter" style="color: #00acee"></i> </span></a> </li> 
                            <li class="ftco-animate"><a href="https://www.facebook.com/luxJadeCollection/" data-toggle="tooltip" data-placement="top" title="Facebook"><span> <i class="fab fa-facebook"  style="color: #4267B2" ></i> </span></a></li> 
                            <li class="ftco-animate"><a href="https://www.instagram.com/lux_jade_collection/?hl=en" data-toggle="tooltip" data-placement="top" title="Instagram"><span> <i class="fab fa-instagram" style="color:#8a3ab9"></i> </span></a></li> 
                        </ul>
					</div>
				</div>
       
				
				<div class="row mt-5">
					<div class="col-md-12 text-center">
						<p class="copyright">
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved . Built by Wamaitha
					  </p>
					</div>
				</div>
			</div>
    </footer>


    <!-- Back to top -->
    <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>
    <!-- /Back to top -->

    <!--======= FOOTER =========-->
    
    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Components Plugin -->
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/smooth-scroll.js"></script>
    <script src="../js/jquery.appear.js"></script>
    <script src="../js/jquery.countTo.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/imagesloaded.pkgd.min.js"></script>
    <script src="../js/isotope.pkgd.min.js"></script>
    <script src="../js/jquery.mb.YTPlayer.js"></script>
    <script src="../js/retina.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../inc/owlcarousel/js/owl.carousel.min.js"></script>
    <script src="../JS/Template/jquery-1.11.3.min.js"></script> 
    <script src="../JS/Template/bootstrap.min.js"></script> 
    <script src="../JS/Template/own-menu.js"></script> 
    <script src="../JS/Template/jquery.lighter.js"></script> 
    <script src="../JS/Template/owl.carousel.min.js"></script> 

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
    <script type="text/javascript" src="rs-plugin/js/jquery.tp.t.min.js"></script> 
    <script type="text/javascript" src="rs-plugin/js/jquery.tp.min.js"></script> 
    <script src="../JS/Template/main.js"></script> 
    <script src="../JS/Template/main.js"></script>

    <!-- Contact Form -->
    <script src="../js/contact.js"></script>
    
    <!-- Custom Plugin -->
    <script src="../js/custom.js"></script>
    
  </body>
</html>