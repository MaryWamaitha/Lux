<?php
session_start();
require('../admin/admin_controller.php');
// check if theres a GET variable with the name 'save'
if(isset($_GET['deleteOrderID'])){

    $id = $_GET['deleteOrderID'];

    // call the function
    $result =  delete_Order_controller($id);

    if($result === true) header("Location: ../admin/dashboard/index.php");
    else header("Location: ../admin/dashboardindex.php?error=1");


}



?>



