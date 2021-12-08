<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

 

// Include config file

 
include_once ('D:\e-commerce\htdocs\Lux\Controllers\customer_controller.php');

// All ids passed  must be set in the prisonerController class respective methods

final class customer_controllerTest extends TestCase{


   

    public function testadd_customer_controller(): void

    {    
        $fname = "Mary";
        $lname = "Zebra today";
        $email= "mwamaitha@gmail.com";
        $password= "Animals";

        $this->assertIsBool(

            add_customer_controller($fname,$lname,$email,$password)

        );

    }

    public function testselect_all_customers_controller(): void

    {    
        

        $this->assertIsBool(

            select_all_customers_controller()

        );

    }

    public function testdelete_customer_controller(): void

    {    
        $id= 10;

        $this->assertIsBool(

            delete_customer_controller($id)

        );

    }

    
 


 

}