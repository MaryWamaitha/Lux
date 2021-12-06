<?php 

require('../Controllers/cart_controller.php');
require('../Classes/product_functions.php');
$ip_addr = $_SERVER["REMOTE_ADDR"]; 
$cart= select_cart_by_ip_controller($ip_addr);
$cartlen=count($cart);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="M_Adnan">
<title>Lux Art Collection</title>

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="../menu/rs-plugin/css/settings.css" media="screen" />

<!-- Bootstrap Core CSS -->
<link href="../css1/Template/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href='../css1/Template/font-awesome.min.css' rel="stylesheet" type="text/css">

<link href='../css1/Template/main.css' rel='stylesheet'>
<link href='../css1/Template/style.css' rel='stylesheet'>
<link href='../css1/Template/responsive.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" type='text/css'>
<!-- Bootstrap for cart -->
<link rel="stylesheet" href="../css1/cart/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="../css1/cart/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="../css1/cart/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="../css1/cart/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="../css1/cart/themify-icons.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="../css1/cart/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="../css1/cart/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="../css1/cart/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="../css1/cart/owl-carousel.css">
	<!-- Slicknav -->
	<link rel="stylesheet" href="../css1/cart/slicknav.min.css">
	<link rel="stylesheet" href="../css1/cart/reset.css">
	<link rel="stylesheet" href="../css1/cart/style.css">
	<link rel="stylesheet" href="../css1/cart/responsive.css">

<script src="https://kit.fontawesome.com/bb731240c4.js" crossorigin="anonymous"></script>

<!-- JavaScripts -->
<script src="../js/Template/modernizr.js"></script>
<script src="../js/jquery-3.2.1.min.js"></script>
<script>
function increment_quantity(pid, price) {
    var inputQuantityElement = $("#input-quantity-"+pid);
    var newQuantity = parseInt($(inputQuantityElement).val())+1;
    var newPrice = newQuantity * price;
    save_to_db(pid, newQuantity, newPrice);
    setTimeout(function(){
      loadPage();

    },1000);
}

function decrement_quantity(pid, price) {
    var inputQuantityElement = $("#input-quantity-"+pid);
    if($(inputQuantityElement).val() > 1) 
    {
    var newQuantity = parseInt($(inputQuantityElement).val()) - 1;
    var newPrice = newQuantity * price;
    save_to_db(pid, newQuantity, newPrice);
    }
    setTimeout(function(){
      loadPage();

    },1000);
}

function save_to_db(pid, new_quantity, newPrice) {
	var inputQuantityElement = $("#input-quantity-"+pid);
	var priceElement = $("#cart-price-"+pid);
    $.ajax({
		url : "../Actions/cart_action.php",
		data : "pid="+pid+"&new_quantity="+new_quantity,
		type : 'post',
		success : function(response) {
			$(inputQuantityElement).val(new_quantity);
            $(priceElement).text("$"+newPrice);
            var totalQuantity = 0;
            $("input[id*='input-quantity-']").each(function() {
                var cart_quantity = $(this).val();
                totalQuantity = parseInt(totalQuantity) + parseInt(cart_quantity);
            });
            $("#total-quantity").text(totalQuantity);
            var totalItemPrice = 0;
            $("div[id*='cart-price-']").each(function() {
                var cart_price = $(this).text().replace("$","");
                totalItemPrice = parseInt(totalItemPrice) + parseInt(cart_price);
            });
            $("#total-price").text(totalItemPrice);
		}
	});
}
//Refreshing the docment after inserting an event

function loadPage(){

    location.reload();

    return false;
}

               
</script>

<!-- Online Fonts -->
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
<?php 
    if (isset($_SESSION['ID'] )) {
        include_once 'menu.php';
    } else {
        include_once 'another_menu.php';
    }
?>
  <!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<?php
						if ($cartlen ==0){
							echo "	<div class='buttonhead'>
							<a href='shop.php' class='btn5'>You don't have any items in your cart. Click here to start shopping</a>
						</div>"; } else {
							$sum=0; ?>
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>PRODUCT</th>
								<th>NAME</th>
								<th class="text-center">SIZE</th>
								<th class="text-center">UNIT PRICE</th>
								<th class="text-center">QUANTITY</th>
								<th class="text-center">TOTAL</th> 
								<th class="text-center"><i class='fas fa-trash'></i></th>
							</tr>
						</thead>
						<tbody>
							
									
							<?php
								$sum=0;
								foreach ($cart as $x){
								$pid=$x['product_id'];
								$item_name=$x['product_name'];
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
								$desc=$x['product_desc'];
								$images=select_images_controller($pid);
								$firstItem = reset($images);
								$image=$firstItem['image_path'];
								$qty=$x['qty'];
								$item_total=item_total($price,$qty); 
								$sum += $item_total;
								echo "
								<tr>
								<td class='image' data-title='No'><img src= '$image' alt='#'></td>
								<td class='product-des' data-title='Description'>
									<p class='product-name'><a href='#'></a></p>
									<p class='product-des'>$item_name</p>
								</td>
								<td class='product-des' data-title='Description'>
									<p class='product-name'><a href='#'></a></p>
									<p class='product-des'>$type</p>
								</td>
								<td class='price' data-title='Price'><span>GHC  $price </span></td>
								<td class='qty' data-title'Qty'><!-- Input Order -->
									<div class='input-group'>
										<div class='button minus'>
											<button type='button' class='btn btn-primary btn-number' onClick='decrement_quantity($pid, $price)' data-type='minus' name='minusqty' >
											<i class='fas fa-minus'></i>
											</button>
										</div>
										<input type='text'  class='input-number'  data-min='1' data-max='100' name ='quantity' id='input-quantity-$pid' value='$qty'>
										<div class='button plus'>
											<button type='button' class='btn btn-primary btn-number' onClick='increment_quantity($pid, $price)' data-type='plus' name ='addqty'  >
                      						<i class='fas fa-plus'></i>
											</button>
										</div>
									</div>
									<!--/ End Input Order -->
								</td>
								<td class='total-amount' data-title='Total'><span> $item_total  </span></td>
								<td class='action' data-title='Remove'><a href='../Actions/cart_action.php?deleteProductID={$pid}'><i class='fas fa-trash' style='color:black'></i></a></td>
							
							</tr>"; 
							}
					
								?>
							
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-8 col-md-5 col-12">
								<div class="left">
									
								
								</div>
							</div>
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul>
										<li>Cart Subtotal<span>GHC<?php echo $sum; ?></span></li>
										
										<li class="last">You Pay<span>GHC <?php echo $sum; ?></span></li>

					
								
									<div class="button5">
										<a href="checkout.php" class="btn">Checkout</a>
										<a href="../index.php" class="btn">Continue shopping</a>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	
	</div>
	<!--/ End Shopping Cart -->
    
    <!-- About -->
    
    
    <!-- News Letter -->
    
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