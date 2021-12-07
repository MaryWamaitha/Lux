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
    <link rel="shortcut icon" href="../images/logo5.png">
    
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS Files For Plugin -->
    <link href="../css/animate.css" rel="stylesheet">
   
    <link href="../css/magnific-popup.css" rel="stylesheet" />
    <link href="../css/YTPlayer.css" rel="stylesheet" />
    <link rel="stylesheet" href="../inc/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../inc/owlcarousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../inc/revolution/css/settings.css" />
    <link rel="stylesheet" href="../inc/revolution/css/layers.css" />
    <link rel="stylesheet" href="../inc/revolution/css/navigation.css" />
    
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="homepage_parallax" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="100">
 
    
    
    <!-- Start Navigation -->
    <header class="nav-solid" id="home">
    <?php 
    if (isset($_SESSION['ID'] )) {
        include_once 'menu.php';
    } else {
        include_once 'another_menu.php';
    }
    ?>
    </header>
    <!-- End Navigation -->

    
      
        <br>
   <!-- Start Contact -->
   <section id="contact" class="p-top-80 p-bottom-50">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- Section Title -->
                    <div class="section-title text-center m-bottom-40">
                        <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">Contact</h2>
                        <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
                        <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"><em> If you would like to send a message to us, partner with us or any other queries. Please fil the form and we will get back to you</em></p>
                    </div>
                </div> <!-- /.col -->
            </div>  <!-- /.row -->

            <div class="row">

                <!-- === Contact Form === -->
                <div class="col-md-7 col-sm-7 p-bottom-30">
                    <div class="contact-form row">

                        <form name="ajax-form" id="ajax-form" action="../Actions/contact.php" method="post">
                            <div class="col-sm-6 contact-form-item wow zoomIn">
                                <input name="name" id="name" type="text"   placeholder="Your Name: *"/>
                                <span class="error" id="err-name">please enter name</span>
                            </div>
                            <div class="col-sm-6 contact-form-item wow zoomIn">
                                <input name="email" id="email" type="text"  placeholder="E-Mail: *"/>
                                <span class="error" id="err-email">please enter e-mail</span>
                                <span class="error" id="err-emailvld">e-mail is not a valid format</span>
                            </div>
                            <div class="col-sm-12 contact-form-item wow zoomIn">
                                <textarea name="message" id="message" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-sm-12 contact-form-item">
                                <button class="send_message btn btn-main btn-theme wow fadeInUp" id="send" data-lang="en">submit</button>                
                            </div>
                            <div class="clear"></div>   
                            <div class="error text-align-center" id="err-form">There was a problem validating the form please check!</div>
                            <div class="error text-align-center" id="err-timedout">The connection to the server timed out!</div>
                            <div class="error" id="err-state"></div>
                        </form> 
                                    
                        <div class="clearfix"></div>
                        <div id="ajaxsuccess">Successfully sent!!</div>
                        <div class="clear"></div>

                    </div> <!-- /.contacts-form & inner row -->
                </div> <!-- /.col -->

                <!-- === Contact Information === -->
                <div class="col-md-5 col-sm-5 p-bottom-30">
                    <address class="contact-info">

                        <p class="m-bottom-30 wow slideInRight">Have any questions or queries. You can contact us using any of the channels below.</p>

                        <!-- === Location === -->
                        <div class="m-top-20 wow slideInRight">
                            <div class="contact-info-icon">
                                <i class="fa fa-location-arrow"></i>
                            </div>
                            <div class="contact-info-title">
                                Address:
                            </div>
                            <div class="contact-info-text">
                            Ruiru, Kiambu Kenya - 00618
                            </div>
                        </div>

                        <!-- === Phone === -->
                        <div class="m-top-20 wow slideInRight">
                            <div class="contact-info-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="contact-info-title">
                                Phone number:
                            </div>
                            <div class="contact-info-text">
                            +254 729093709
                            </div>
                        </div>

                        <!-- === Mail === -->
                        <div class="m-top-20 wow slideInRight">
                            <div class="contact-info-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-info-title">
                                Email:
                            </div>
                            <div class="contact-info-text">
                            luxartgallery@gmail.com
                            </div>
                        </div>

                    </address>
                </div> <!-- /.col -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>
    <!-- End Contact -->


    <!-- Start Footer -->
    <?php include_once("footer.php") ?>
    <!-- End Footer -->


    <!-- Back to top -->
    <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>
    <!-- /Back to top -->

    
    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
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
    
    <!-- Components Plugin -->
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/smooth-scroll.js"></script>
    <script src="../js/jquery.appear.js"></script>
    <script src="../js/jquery.countTo.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/imagesloaded.pkgd.min.js"></script>
    <script src=../js/isotope.pkgd.min.js"></script>
    <script src="../js/jquery.mb.YTPlayer.js"></script>
    <script src="../js/retina.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../inc/owlcarousel/js/owl.carousel.min.js"></script>
    <script src="../inc/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="../inc/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Contact Form -->
    <script src="../js/contact.js"></script>
    
    <!-- Custom Plugin -->
    <script src="../js/custom.js"></script>

    <!-- RS Plugin Extensions -->
    <script src="../inc/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="../inc/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="../inc/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="../inc/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="../inc/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="../inc/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="../inc/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="../inc/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="../inc/revolution/js/extensions/revolution.extension.parallax.min.js"></script>


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