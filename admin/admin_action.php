<?php
session_start();
require('admin_controller.php');
// check if theres a GET variable with the name 'save'
if(isset($_GET['deleteOrderID'])){

    $id = $_GET['deleteOrderID'];

    // call the function
    $result =  delete_Order_controller($id);

    if($result === true) header("Location: dashboard/index.php");
    else header("Location: dashboard/index.php?error=1");


}



?>



