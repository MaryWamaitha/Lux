<?php 
session_start();

if (isset($_SESSION['ID'] )) {
  require('../Controllers/cart_controller.php');
  require('../Classes/product_functions.php');
  $custID=$_SESSION["ID"];
  $ip_addr = $_SERVER["REMOTE_ADDR"]; 
  $updateID= update_ID_controller($custID,$ip_addr);
  $cart=select_cart_by_cid_controller($custID);
  $itemcount=count($cart);
  $customer=select_customer_controller($custID);
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
<link href="../css/Template/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href='../css/Template/font-awesome.min.css' rel="stylesheet" type="text/css">

<link href='../css/Template/main.css' rel='stylesheet'>
<link href='../css/Template/style.css' rel='stylesheet'>
<link href='../css/Template/responsive.css' rel='stylesheet'>

<script src="https://kit.fontawesome.com/bb731240c4.js" crossorigin="anonymous"></script>

<!-- JavaScripts -->
<script src="../js/Template/modernizr.js"></script>

<!-- Online Fonts -->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="../images/logo5.png">
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
  include_once('menu.php');
  ?>
        
    <!--======= PAGES INNER =========-->
    <section class="chart-page padding-top-100 padding-bottom-100">
      <div class="container"> 
        
        <!-- Payments Steps -->
        <div class="shopping-cart"> 
          
          <!-- SHOPPING INFORMATION -->
          <div class="cart-ship-info">
            <div class="row"> 
              
              <!-- ESTIMATE SHIPPING & TAX -->
              <div class="col-sm-7">
                <h6><b>Contact details </b> </h6>
                <p> Please note that these are the details we will use to contact you. <br>If any of the details have changed, kindly update them  </p>
                <form action="../Actions/customer_action.php" method="GET" >
                  <ul class="row">
                    
                    <!-- Name -->
                    <li class="col-md-6">
                      <label> *FIRST NAME
                        <input type="text" name="Fname" value="<?php echo $customer['customer_Fname']?>" placeholder="">
                      </label>
                    </li>
                    <!-- LAST NAME -->
                    <li class="col-md-6">
                      <label> *LAST NAME
                        <input type="text" name="Lname" value="<?php echo $customer['customer_Lname']?>" placeholder="">
                      </label>
                    </li>
                    
                    <!-- EMAIL ADDRESS -->
                    <li class="col-md-6">
                      <label> *EMAIL ADDRESS
                        <input type="text" name="email" value="<?php echo $customer['customer_email']?>" placeholder="">
                      </label>
                    </li>
                    <!-- PHONE -->
                    <li class="col-md-6">
                      <label> *PHONE
                        <input type="text" name="contact" value="<?php echo $customer['customer_contact']?>" placeholder="">
                      </label>
                    </li>
                    
                    <!-- PHONE -->
                    <li class="col-md-6">
                      <button type="submit" class="btn" name="updateCustomer">Update</button>
                    </li>
                    
                    <!-- CREATE AN ACCOUNT -->
                    <li class="col-md-6">
                     
                    </li>
                  </ul>
                </form>
                <?php
                  if (isset($_GET["error"]) && $_GET["error"]==0)
                    echo ' <div class="alert alert-danger" role="alert"> The update was not successful, please try again</div>' ;
                   
					
                ?>
                
                <!-- SHIPPING info -->
               
                <form>
                  <ul class="row">
                    
                   
                  </ul>
                </form>
              </div>
              
              
                
                <div class='col-sm-5'>
                <h6>YOUR ORDER</h6>
                <div class='order-place'>
                  <div class='order-detail'>
                  <?php
                  if ($itemcount > 0 ){
                  $sum = 0;
                  foreach ($cart as $x){
                    $pid=$x['p_id'];
                    $size=$x['size'];
                    if ($size==1){
                      $price=1500;
                      $type='25*18';
                    }
                    elseif ($size==2){
                      $price=4000;
                      $type='36*24';
                    }
                    else{
                      $price=10000;
                      $type='4*3';
                    }
                    $item_name=$x['product_name'];
                    $images=select_images_controller($pid);
                    $firstItem = reset($images);
                    $image_file=$firstItem['image_path'];
                    $image_string= explode("/",$image_file);
                    $image_name= end ($image_string);
                    $path="../images/Products/";
                    $product_image=$path.$image_name;
                    $qty=$x['qty'];
                    $email=$_SESSION['email'];
                    $item_total=item_total($price,$qty);
                    $sum += $item_total;
                    
                   
                       
                    echo " <p>$item_name <span> Ksh $item_total </span></p> "; }

                    echo "
                    <!-- SUB TOTAL -->
                                  <form id= 'paymentForm' action='payment.php' method='post'>
                                        
                                        <!-- SUB TOTAL -->
                                        <p class='all-total' id='total'>TOTAL COST <span> Ksh  $sum </span></p>
                                        <p>For the painting process to begin, you can either pay the full amount, pay half to initiate it and pay the rest on completion or pay all on delivery.Please select one below</p>
                                        <div class='pay-meth'>
                                        <ul>
                                          <li>  
                                            <div class='radio'>
                                              <input type='radio' name='radio' id='full' value='full'>
                                              <label for'full'> Pay full cost  </label>
                                            </div>
                                          </li>
                                          <li>
                                            <div class='radio'>
                                              <input type='radio' name='radio' id='half' value='half'>
                                              <label for='half'> Pay half now </label>
                                            </div>
                                          </li>
                                          <li>
                                            <div class='radio'>
                                              <input type='radio' name='radio' id='delivery' value='delivery'>
                                              <label for='delivery'> Pay on Delivery </label>
                                            </div>
                                          </li>
                                        
                                        
                                          <input class='form-control' type='hidden'  name='email' id='email' value= $email >
                                          <input class='form-control' type='hidden'  name='amount' id='amount' value=  $sum >
                                          <input class='form-control' type='hidden'  name='qty' id ='qty' value= $qty >
                                          <input class='form-control' type='hidden'  name='pid' id='pid' value=  $pid >
                                        
                                          </ul>
                                          <button class='btn  btn-dark pull-right margin-top-30' type='submit' name='order' > Place Order </button></div>
                                         </div>
                                        </form>
                                     ";
                    
                      
                     
                
                }else {
                   echo " <p class='all-total' id='total'>There are no items in your cart </p> ";}
                   ?>
                   <?php
                  if (isset($_GET["error"]) && $_GET["error"]==2)
                    echo ' <div class="alert alert-danger" role="alert"> The order was not placed and the cart was not cleared successfully. Please try again</div>' ;
                  if (isset($_GET["error"]) && $_GET["error"]==3)
                    echo ' <div class="alert alert-danger" role="alert"> The order was not placed successfully. Please try again</div>' ;
                   
					
                ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
       
  </div>
  
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
<script type="text/javascript" src="../menu/rs-plugin/js/jquery.tp.t.min.js"></script> 
<script type="text/javascript" src="../menu/rs-plugin/js/jquery.tp.min.js"></script> 
<script src="../js/Template/main.js"></script> 
<script src="../js/Template/main.js"></script>

	<!-- PAYSTACK INLINE SCRIPT -->
<script src="https://js.paystack.co/v1/inline.js"></script> 

</body>
</html>

<?php
} else {
  header("Location:login.php");
}
?>