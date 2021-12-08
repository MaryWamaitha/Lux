<?php 
session_start();

if (isset($_SESSION['ID'] )) {
  if (isset($_POST['order'] )){
    $cost = $_POST['amount'];
    $payment = $_POST['radio'];
    require('../Controllers/cart_controller.php');
    require('../Classes/product_functions.php');
    $custID=$_SESSION["ID"];
    $cart=select_cart_by_cid_controller($custID);
    if ($payment=='delivery'){
      header("Location: ../Actions/payment_action.php?delivery='delivery'&amount=$cost");
      } elseif($payment=='half'){
        $sum=$cost/2;
      } else {
        $sum=$cost;
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
<link rel="shortcut icon" href="../images/logo5.png">

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
                <h5>Kindly confirm all the order details and amount and press pay when ready. </h5>
                <br>
                <div class='order-place'>
                  <div class='order-detail'>
                  <?php
                  foreach ($cart as $x){
                    $pid=$x['p_id'];
                    $item_name=$x['product_name'];
                    $size=$x['size'];
                    $type=type($size);
                    $price=price($size);
                    $email=$_SESSION['email'];
                    $qty=$x['qty'];
                    $item_total=item_total($price,$qty);
                   
                    echo " <p>$item_name <span> Ksh $item_total </span> </p> "; }

                    echo "
                    <!-- SUB TOTAL -->
                                  <p>Quantity <span>$qty</span> </p>
                                  <form id= 'paymentForm' >
                                      
                                        <!-- SUB TOTAL -->
                                        <p class='all-total' id='amount'>Amount Due <span> Ksh  $sum </span></p>
                                      
                                      </div>
                                      <input class='form-control' type='hidden'  name='email' id='email' value= $email >
                                      <input class='form-control' type='hidden'  name='total' id='total' value= $sum >
                                      <input class='form-control' type='hidden'  name='qty' id ='qty' value= $qty >
                                      <input class='form-control' type='hidden'  name='pid' id='pid' value=  $pid >
                                      <input class='form-control' type='hidden'  name='payment' id ='payment' value= $payment >
                                      
                                        <button class='btn  btn-dark pull-right margin-top-30' type='submit' onclick='payWithPaystack()' > Pay</button></div>
                                        </form>"; ?>
                  
                                     <?php
                                     if (isset($_GET["error"]) && $_GET["error"]==3)
                                         echo ' <div class="alert alert-danger" role="alert">Payment was  not successfully recorded, if any deductions were made, we will be in touch soon with the refund<br></div>' ;
                                     if (isset($_GET["error"]) && $_GET["error"]==1)
                                         echo ' <div class="alert alert-danger" role="alert">The payment was not successfully verified, if deductions were made, we will refund<br></div>' ;
                                     if (isset($_GET["error"]) && $_GET["error"]==2)
                                         echo ' <div class="alert alert-danger" role="alert">Payment was  not successfully noted, if any deductions were made, we will be in touch soon with the refund<br></div>' ;
                                     if (isset($_GET["error"]) && $_GET["error"]==0)
                                         echo ' <div class="alert alert-danger" role="alert">Order was not sucessfully recorded, we will be in touch soon<br></div>' ;
                                 ?>
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

<!-- PAYSTACK INLINE SCRIPT -->
<script src="https://js.paystack.co/v1/inline.js"></script> 

<script>
	const paymentForm = document.getElementById('paymentForm');
	paymentForm.addEventListener("submit", payWithPaystack, false);

	// PAYMENT FUNCTION
	function payWithPaystack(e) {
		e.preventDefault();
		let handler = PaystackPop.setup({
			key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd', // Replace with your public key
      email: document.getElementById("email").value,
      qty: document.getElementById("qty").value,
      payment: document.getElementById("payment").value,
      pid: document.getElementById("pid").value,
	    amount: document.getElementById("total").value * 100,
			currency:'GHS',
			onClose: function(){
			alert('Window closed.');
			},
			//sent email
			callback: function(response){
        window.location = `../Actions/payment_action.php?email=${document.getElementById("email").value}&amount=${document.getElementById("total").value}&reference=${response.reference}&date=${response.transaction_date}&currency=${response.currency}&payment=${document.getElementById("payment").value}`
			}
		});
		handler.openIframe();
	};

</script>

</body>
</html>

<?php
} } else {
  header("Location:login.php");
}
?>