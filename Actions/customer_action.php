<?php
session_start();
require('../Controllers/customer_controller.php');
// check if theres a GET variable with the name 'save'
if(isset($_GET['updateCustomer'])){
    // retrieve the details from the form submission
    $Fname= $_GET['Fname'];
    $Lname= $_GET['Lname'];
    $email= $_GET['email'];
    $contact= $_GET['contact'];
    $id=$_SESSION["ID"];
    //Updates the customer details
        $result = update_details_controller($id,$Fname, $Lname, $email,$contact);
        //If this is successful, it redirects back to the checkout page
        if($result === true){
        header("Location: ../view/checkout.php");
        //if the update did not happen successfully, it redirects back to the admin page and shows an error
        }else {
            header("Location: ../view/checkout.php?error=0");
        } 
       
     }
       
        


?>



