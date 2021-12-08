<?php
session_start();
require('product_controller.php');
$productsinitial = select_all_products_controller();
$products=array_slice($productsinitial,0,6);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Lux Jade Collection</title>
    
    <meta name="description" content="N.Agency - Responisve Landing Page for Agency">
    <meta name="keywords" content="">
    <meta name="author" content="tabthemes">
    
   <!-- Favicons -->
   <link rel="shortcut icon" href="images/logo5.png">
    
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" />
    
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    
     <!-- Bootstrap Core CSS -->
    <link href="css1/Template/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href='css1/Template/font-awesome.min.css' rel="stylesheet" type="text/css">
    <link href='css1/Template/ionicons.min.css' rel='stylesheet'>
    <link href='css1/Template/main.css' rel='stylesheet'>
    <link href='css1/Template/style.css' rel='stylesheet'>
    <link href='css1/Template/responsive.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- CSS Files For Plugin -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet" />
    <link href="css/YTPlayer.css" rel="stylesheet" />
    <link href="inc/owlcarousel/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="inc/owlcarousel/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="inc/revolution/css/settings.css" rel="stylesheet" />
    <link href="inc/revolution/css/layers.css" rel="stylesheet" />
    <link href="inc/revolution/css/navigation.css" rel="stylesheet" />
    <!-- JavaScripts -->
    <script src="js/Template/modernizr.js"></script>
    
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="homepage_slider" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="100">
    
    
   

    <?php 
        if (isset($_SESSION['ID'] )) {
            include_once 'usermenu.php';
        } else {
            include_once 'menu.php';
        }
    ?>
    

    
     <!-- Start Intro -->
    <section class="parallax-bg" style="background-image:url(images/elephantmain.jpeg)" data-stellar-background-ratio="0.5">
    <!-- Section Title -->
        <div class="js-height-full container">
            <div class="intro-content white-color text-center vertical-section">
                <div class="vertical-content">
                <br>
                <br>
                <h1 class="wow zoomIn m-bottom-20" data-wow-duration="1s" data-wow-delay="0.6s">Lux Jade Collection</h1>
                <p class="wow zoomIn m-bottom-20" data-wow-duration="1s" data-wow-delay="0.7s">Acrylic paintings done on canvas, that will capture, please and embraces our hearts</p>
                <a data-scroll href="#portfolio" class="btn btn-main btn-theme wow fadeInUp" data-wow-delay="0.8s">View and buy pieces</a>
                </div>
            </div>
            <!-- Scroll Down -->
            <div class="scroll-next">
                <a data-scroll href="#services" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a>
            </div>
            <!-- End Scroll Down -->
        </div>
    </section>
    <!-- End Intro -->


   <!-- Start Services -->
   <section id="services" class="p-top-80 p-bottom-40">
        <div class="container">
            <div class="row">

                <!-- Service Item 1 -->                  
                <div class="col-md-4 m-bottom-20">              
                    <div class="service service-type-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">               
                        <div class="service-header clearfix">
                            <div class="service-icon pull-left">
                                <i class="fas fa-portrait" aria-hidden="true"></i>
                            </div>
                            <h4>Potraits</h4>
                        </div>
                        <div class="service-text">
                            <p>Do you have an image of youurself or a loved one that you would like a potrait of? Call or WhatsApp us at <b>+254 729093709</b> and embody the image for life</p>
                        </div>
                    </div>                   
                </div> <!-- /.col -->

                <!-- Service Item 2 -->                  
                <div class="col-md-4 m-bottom-20">              
                    <div class="service service-type-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">               
                        <div class="service-header clearfix">
                            <div class="service-icon pull-left">
                                <i class="fas fa-paint-brush" aria-hidden="true"></i>
                            </div>
                            <h4>Custom Painting</h4>
                        </div>
                        <div class="service-text">
                            <p>Is there a scenery, image or idea you would like brought to life with art. You are in the right place, tell me more by Call or WhatsApp at <b>+254 729093709</b>  and watch your idea come to reality through art</p>
                        </div>
                    </div>                   
                </div> <!-- /.col --> 

                <!-- Service Item 3 -->                  
                <div class="col-md-4 m-bottom-20">              
                    <div class="service service-type-2 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">               
                        <div class="service-header clearfix">
                            <div class="service-icon pull-left">
                                <i class="fas fa-palette" aria-hidden="true"></i>
                            </div>
                            <h4>Existing Portfolio</h4>
                        </div>
                        <div class="service-text">
                            <p>Are you just looking for a nice art piece to gift someone or to turn your house into a home. View our existing pieces below. Available in small, medium and large size</p>
                        </div>
                    </div>                   
                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>
    <!-- End Services -->


    <!-- Start Portfolio -->
    <section id="portfolio" class="light-bg p-top-80 p-bottom-80">
        <div class="container">

            <!-- Section Title -->
            <div class="section-title text-center m-bottom-30">
                <h2><strong>Portfolio</strong></h2>
                <p>Here are some of the paintings we have done.Click below to view all of them</p>
                <div class="divider-center-small"></div>
            </div>

            <!-- Portfolio-filter -->
            <ul class="pf-filter text-center list-inline">
                <li><a href="view/shop.php" class="btn btn-main btn-theme">Shop Paintings</a></li>
               
            </ul>          

            <!-- Portfolio -->
            <div class="portfolio portfolio-isotope col-3 gutter">
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
                                            $path="images/Products/";
                                            $product_image=$path.$image_name;
                                           
											?>
                <!-- Portfolio Item -->
                <div class="pf-item branding">
                    <a href="<?php echo $product_image ?>" class="pf-style lightbox-image mfp-image">
                        <div class="pf-image">
                            <img src="<?php echo $product_image ?>" alt="" height="400" width="600">
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
                    <a href="view/product_detail.php?PID=<?php echo $productID;?>" class="btn btn-main btn-theme " data-wow-delay="0.5s">Add to Cart</a>
                </div>
                <?php }?>
                

            </div> <!-- Portfolio -->
            
        </div> <!-- /.container -->
    </section>
    <!-- End Portfolio -->


   


   <!-- Start Video Section -->
   <section class="video-bg fixed-height-small overlay-dark" style="background-image:url(img/video-bg.jpg)">
        <div class="js-height-parent container">
            <!-- video setting -->
            <div class="video-player" data-property="{videoURL:'https://youtu.be/WqznhemSyW8',containment:'.video-bg',autoPlay:true, mute:true, loop:true, showControls:false, startAt:0, opacity:1}"></div>

            <div class="vertical-section">
                <div class="vertical-content">
                    <div class="video-caption text-center white-color">
                        <h2 class="p-top-20">Watch this video to see how Wololo TV Styles his apartment with one of our pieces</h2>
                        <div class="divider-center-small divider-white"></div>
                        <a href= "https://youtu.be/WqznhemSyW8" ><h6 class="p-bottom-20">Click here to watch on Youtube </h6></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Video Section -->


    
<!-- Start Testimonial -->
<section id="testimonials" class="light-bg p-top-80 p-bottom-80">

            <!-- Section Icon -->
            <div class="testimonial-icon text-center wow bounceIn" data-wow-delay="0.9s">
                <i class="fa fa-comments-o"></i>
            </div>

            <!-- Section Title -->
            <div class="section-title text-center m-bottom-40">
                <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">Testimonials</h2>
                <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
            </div>



            <!-- === Testimonials === -->
            <div id="owl-testimonials" class="owl-carousel owl-theme testimonial text-center">

                <!-- === Testimonial item 1 === -->
                <div class="testimonial-item text-center">
                    <p class="testimonial-desc">"I really love the piece created. It was a nice surprise. Good work Lux"</p>
                    <h5 class="testimonial-author">Fidelma</h5>
                </div>

                <!-- === Testimonial item 2 === -->
                <div class="testimonial-item text-center">
                    <p class="testimonial-desc">"Excellent so to no sincerity smallness. Removal request delight if on he we. Unaffected in we by apartments astonished to decisively themselves. Offended ten old consider speaking."</p>
                    <h5 class="testimonial-author">Kathy Doe - Service Corp</h5>
                </div>

                <!-- === Testimonial item 3 === -->
                <div class="testimonial-item text-center">
                    <p class="testimonial-desc">"Advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous so absolute. My melancholy unpleasing imprudence considered in advantages."</p>
                    <h5 class="testimonial-author">Jack Doe - Inka Design</h5>
                </div>

        </div> <!-- /#owl-testimonials -->
    </section>
<!-- End Testimonial -->
<!--======= FOOTER =========-->
<?php include_once("view/footer.php"); ?>

    


    <!-- Back to top -->
    <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>
    <!-- /Back to top -->

    
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Components Plugin -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.js"></script>
    <script src="js/retina.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="inc/owlcarousel/js/owl.carousel.min.js"></script>
    <script src="inc/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="inc/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Contact Form -->
    <script src="js/contact.js"></script>
     <!-- Bootstrap -->
     
    <script src="js/Template/jquery-1.11.3.min.js"></script> 
    <script src="js/Template/bootstrap.min.js"></script> 
    <script src="js/Template/own-menu.js"></script> 
    <script src="js/Template/jquery.lighter.js"></script> 
    <script src="js/Template/owl.carousel.min.js"></script> 

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
    <script type="text/javascript" src="rs-plugin/js/jquery.tp.t.min.js"></script> 
    <script type="text/javascript" src="rs-plugin/js/jquery.tp.min.js"></script> 
    <script src="js/Template/main.js"></script> 
    <script src="js/Template/main.js"></script>
        <!-- Custom Plugin -->
    <script src="js/custom.js"></script>

    <!-- RS Plugin Extensions -->
    <script src="inc/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.parallax.min.js"></script>


    <script>
      var tpj = jQuery;

      var revapi280;
      tpj(document).ready(function() {
          if (tpj("#rev_slider_nagency").revolution == undefined) {
              revslider_showDoubleJqueryError("#rev_slider_nagency");
          } else {
              revapi280 = tpj("#rev_slider_nagency").show().revolution({
                  sliderType: "standard",
                  sliderLayout: "fullscreen",
                  dottedOverlay: "none",
                  delay: 90000,
                  navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    onHoverStop:"off",
                    touch:{
                      touchenabled:"on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                    }
                    ,
                    arrows: {
                          style: "uranus",
                          enable: true,
                          hide_onmobile: true,
                          hide_under: 496,
                          hide_onleave: true,
                          hide_delay: 200,
                          hide_delay_mobile: 1200,
                          tmp: '',
                          left: {
                              h_align: "left",
                              v_align: "center",
                              h_offset: 20,
                              v_offset: 0
                          },
                          right: {
                              h_align: "right",
                              v_align: "center",
                              h_offset: 20,
                              v_offset: 0
                          }
                      }
                  },
                  responsiveLevels: [1200, 991, 767, 480],
                  visibilityLevels: [1200, 991, 767, 480],
                  gridwidth: [1200, 991, 767, 480],
                  gridheight: [868, 768, 960, 720],
                  lazyType: "none",
                  parallax: {
                    type:"mouse+scroll",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2,3,4,5,6,7,12,16,10,50],
                    disable_onmobile:"on"
                  },
                  shadow: 0,
                  spinner: "spinner2",
                  autoHeight: "off",
                  fullScreenAutoWidth: "off",
                  fullScreenAlignForce: "off",
                  fullScreenOffsetContainer: "",
                  fullScreenOffset: "0",
                  disableProgressBar: "on",
                  hideThumbsOnMobile: "off",
                  hideSliderAtLimit: 0,
                  hideCaptionAtLimit: 0,
                  hideAllCaptionAtLilmit: 0,
                  debugMode: false,
                  fallbacks: {
                      simplifyAll: "off",
                      disableFocusListener: false,
                  }
              });
          }
      }); /*ready*/
  </script>
    
  </body>
</html>