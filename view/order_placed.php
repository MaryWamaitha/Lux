<?php 
require('../Controllers/cart_controller.php');

session_start();
$custID = $_SESSION['ID'];
$order_id = $_GET['order_id'];
$order = select_order_controller($order_id);
$order_details = select_orderDetails_controller($order_id);
$customer=select_order_user_controller($custID,$order_id);
require('../Classes/product_functions.php');
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
<link rel="shortcut icon" href="../images/logo5.png">
<link href='../css/Template/main.css' rel='stylesheet'>
<link href='../css/Template/style.css' rel='stylesheet'>
<link href='../css/Template/responsive.css' rel='stylesheet'>

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
    if (isset($_SESSION['ID'] )) {
        include_once 'menu.php';
    } else {
        include_once 'another_menu.php';
    }
?>
  

<!-- LOADER -->
<div class="container bootdey">
<div class="row invoice row-printable">
    <div class="col-md-10">
        <!-- col-lg-12 start here -->
        <div class="panel panel-default plain" id="dash_0">
            <!-- Start .panel -->
            <div class="panel-body p30">
                <div class="row">
                    <!-- Start .row -->
                    <div class="col-lg-6">
                        <!-- col-lg-6 start here -->
                        <div class="invoice-logo"><img width="100" src="../images/logo.png" alt="Invoice logo"></div>
                    </div>
                    <!-- col-lg-6 end here -->
                    <div class="col-lg-6">
                        <!-- col-lg-6 start here -->
                        <div class="invoice-from">
                            <ul class="list-unstyled text-right">
                                <li>Lux Jade Art Collection</li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- col-lg-6 end here -->
                    <div class="col-lg-12">
                        <!-- col-lg-12 start here -->
                        <div class="invoice-details mt25">
                            <div class="well">
                                <ul class="list-unstyled mb0">
                                   
                                    <li><strong>Invoice No</strong> <?php echo $customer['invoice_no']; ?></li>
                                    <li><strong>Order Date:</strong> <?php echo $customer['order_date']; ?></li>
                                    <li>Thank you for placing an order with Lux Jade Collection. The painting will be ready in 3-5 days. <br>We will be in touch when ready. <br> Please  dont hesitate to contact us if you have any questions</li>
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="invoice-to mt25">
                            <ul class="list-unstyled">
                                <li><strong>Customer details</strong></li>
                                <li><?php echo $customer['customer_Fname']; echo '  ' ; echo $customer['customer_Lname']; ?></li>
                                <li><?php echo $customer['customer_email']; ?></li>
                                <li><?php echo $customer['customer_contact']; ?></li>
    
                            </ul>
                        </div>
                        <div class="invoice-items">
                            <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="0">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="per70 text-center">Painting Name</th>
                                            <th class="per70 text-center">Painting Image</th>
                                            <th class="per5 text-center">Size</th>
                                            <th class="per5 text-center">Unit Price</th>
                                            <th class="per5 text-center">Quantity</th>
                                            
                                            <th class="per25 text-center">Total</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                                <?php
                                            foreach ($order_details as $x){  
                                                $pid=$x['product_id'];
                                                $images=select_images_controller($pid);
                                                $firstItem = reset($images);
                                                $image_file=$firstItem['image_path'];
                                                $image_string= explode("/",$image_file);
                                                $image_name= end ($image_string);
                                                $path="../images/Products/";
                                                $product_image=$path.$image_name;
                                                $size=$x['size'];
                                                $type=type($size);
                                                $price=price($size);
                                                $total=$x['qty']*$price;
                                                 ?>  
                                                <td><?php echo $x['product_name']?></td>  
                                                <td><img src=<?php echo $product_image?> alt="Description for image" width="150" height="80"></td> 
                                                <td><?php echo $type?></td>
                                                <td><?php echo $price?></td>
                                                <td><?php echo $x['qty']?></td>
                                                <td><?php echo $total?></td>
                                        </tr>   
                                        <?php
                                        }
                                        ?>
                                        
                                        <tr>
                                            <th colspan="2" class="text-right">Total amount paid</th>
                                            <th class="text-center"><?php echo $order['amt'];?></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="invoice-footer mt25">
                            <p class="text-center">Generated <?php echo(date("Y-m-d")); ?> <a href="#" class="btn btn-default ml15"><i class="fa fa-print mr5"></i> Print</a></p>
                        </div>
                    </div>
                    <!-- col-lg-12 end here -->
                </div>
                <!-- End .row -->
            </div>
        </div>
        <!-- End .panel -->
    </div>
    <!-- col-lg-12 end here -->
</div>
</div>

<!--======= RIGHTS =========--> 
<?php include_once("footer.php") ?>
   
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
</body>
</html>
