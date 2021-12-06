<?php
session_start();
require('../Controllers/product_controller.php');
$category= 'Landscape';
$products = select_category_controller($category);
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
    
    
    <!-- Preloader -->
    <div id="preloader">
        <div id="spinner"></div>
    </div>
    <!-- End Preloader-->
    <?php include_once('another_menu.php')?>
    
    <!-- Start Navigation -->
    
    
    <!-- Section Title Portfolio -->
    <div class="section-title-bg text-center">
        <h2 class="wow fadeInDown no-margin" data-wow-duration="1s" data-wow-delay="0.6s"><strong>Portfolio</strong></h2>
        <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
        <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">Check out what we have done so far!</p>
    </div>


    <!-- Start Portfolio -->
    <section id="portfolio" class="p-top-80 p-bottom-80">
        <div class="container">

            <!-- Portfolio-filter -->
            <ul class="pf-filter pf-filter-gray text-center list-inline">
                <li><a href="#" data-filter="*" class="iso-active iso-button">All</a></li>
                <li><a href="#" data-filter=".graphic" class="iso-button">Graphic</a></li>
                <li><a href="#" data-filter=".webdesign" class="iso-button">Web Design</a></li>
                <li><a href="#" data-filter=".branding" class="iso-button">Branding</a></li>
                <li><a href="#" data-filter=".video" class="iso-button">Video</a></li>
            </ul>          

            <!-- Portfolio -->
            <div class="portfolio portfolio-isotope col-2 gutter">

            <?php 
                                      
                                      foreach ($products as $x){
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
              <div class="pf-item branding">
                  <a href="<?php echo $product_image ?>" class="pf-style lightbox-image mfp-image">
                      <div class="pf-image">
                          <img src="<?php echo $product_image ?>" alt="" height="400" width="750">
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
                  <p><a href= "view/product_detail.php?PID=<?php echo $productID;?>">Add to cart <i class="fas fa-cart-plus"></i></a></p> <!-- .pf-style -->
              </div>
              <?php }?>
              

          

                <!-- Portfolio Item -->
                <div class="pf-item graphic webdesign">
                    <a href="../img/portfolio/2.jpg" class="pf-style lightbox-image mfp-image">
                        <div class="pf-image">
                            <img src="../img/portfolio/2.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-caption">
                                    <div class="overlay-content">
                                        <div class="pf-info white-color">
                                            <h4 class="pf-title">Project Name</h4>
                                            <p>Graphic, Web Design</p>
                                        </div> <!-- .pf-info -->
                                    </div> <!-- .overlay-content -->
                                </div> <!-- .overlay-caption -->
                            </div> <!-- .overlay -->
                        </div> <!-- .pf-image -->
                    </a> <!-- .pf-style -->
                </div>

                <!-- Portfolio Item -->
                <div class="pf-item video webdesign">
                    <a href="https://www.youtube.com/watch?v=6D-A6CL3Pv8" class="pf-style lightbox-video mfp-iframe">
                        <div class="pf-image">
                            <img src="../img/portfolio/3.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-caption">
                                    <div class="overlay-content">
                                        <div class="pf-info white-color">
                                            <h4 class="pf-title">Project Name</h4>
                                            <p>Video, Web Design</p>
                                        </div> <!-- .pf-info -->
                                    </div> <!-- .overlay-content -->
                                </div> <!-- .overlay-caption -->
                            </div> <!-- .overlay -->
                        </div> <!-- .pf-image -->
                    </a> <!-- .pf-style -->
                </div>

                <!-- Portfolio Item -->
                <div class="pf-item video webdesign">
                    <a href="https://www.youtube.com/watch?v=6D-A6CL3Pv8" class="pf-style lightbox-video mfp-iframe">
                        <div class="pf-image">
                            <img src="../img/portfolio/4.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-caption">
                                    <div class="overlay-content">
                                        <div class="pf-info white-color">
                                            <h4 class="pf-title">Project Name</h4>
                                            <p>Video, Web Design</p>
                                        </div> <!-- .pf-info -->
                                    </div> <!-- .overlay-content -->
                                </div> <!-- .overlay-caption -->
                            </div> <!-- .overlay -->
                        </div> <!-- .pf-image -->
                    </a> <!-- .pf-style -->
                </div>

                <!-- Portfolio Item -->
                <div class="pf-item branding graphic">
                    <a href="../img/portfolio/5.jpg" class="pf-style lightbox-image mfp-image">
                        <div class="pf-image">
                            <img src="../img/portfolio/5.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-caption">
                                    <div class="overlay-content">
                                        <div class="pf-info white-color">
                                            <h4 class="pf-title">Project Name</h4>
                                            <p>Branding, Graphic</p>
                                        </div> <!-- .pf-info -->
                                    </div> <!-- .overlay-content -->
                                </div> <!-- .overlay-caption -->
                            </div> <!-- .overlay -->
                        </div> <!-- .pf-image -->
                    </a> <!-- .pf-style -->
                </div>

                <!-- Portfolio Item -->
                <div class="pf-item branding graphic">
                    <a href="../img/portfolio/6.jpg" class="pf-style lightbox-image mfp-image">
                        <div class="pf-image">
                            <img src="../img/portfolio/6.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-caption">
                                    <div class="overlay-content">
                                        <div class="pf-info white-color">
                                            <h4 class="pf-title">Project Name</h4>
                                            <p>Branding, Graphic</p>
                                        </div> <!-- .pf-info -->
                                    </div> <!-- .overlay-content -->
                                </div> <!-- .overlay-caption -->
                            </div> <!-- .overlay -->
                        </div> <!-- .pf-image -->
                    </a> <!-- .pf-style -->
                </div>

            </div> <!-- Portfolio -->
            
        </div> <!-- /.container -->
    </section>
    <!-- End Portfolio -->

    <!-- Start Call to Action -->
    <section class="light-bg p-top-60 p-bottom-60">
        <div class="container">          
            <div class="row">
                
                <div class="col-xs-12 c2a-content text-center">                   
                    <!-- Text -->
                    <h2 class="wow fadeInDown" data-wow-delay="0.3s">Like Our Works?</h2>
                    <p class="m-bottom-30 wow fadeInDown" data-wow-delay="0.4s">Check out our Price list & lets start soemthing new. We are affordable & flexible.</p>
                    <!-- Button -->
                    <a data-scroll href="index_02.html#price" class="btn btn-main btn-theme wow fadeInUp" data-wow-delay="0.5s">See Pricing</a>            
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
                        <h4 style='color:white' ><span> <i class="fas fa-envelope"  style='color:white'>  </i> luxartgallery@gmail.com </span>  </h4>
                        <br>
						<p class="menu">
							<a href="index.php">Home </a>
							<a href="shop.php">Shop </a>
							<a href="custom.php">Custom painting  </a>
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