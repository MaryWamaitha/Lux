 <?php
session_start();
require('../admin_controller.php');

// updating
if(isset($_GET['editorder'])){

    // retrieve the order status and ID  from the form submission
    $order_status = $_GET['status'];
    $order_id=$_GET['order_id'];
   

    // call the function
    $result = update_orderstatus_controller($order_id,$order_status);

    if($result === true) header("Location:index.php");
    else header("Location: index.php?error=1");


}







?>