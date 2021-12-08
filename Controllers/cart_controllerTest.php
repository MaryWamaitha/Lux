<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

 

// Include config file

 
include_once ('D:\e-commerce\htdocs\Lux\Controllers\cart_controller.php');

// All ids passed  must be set in the prisonerController class respective methods

final class cart_controllerTest extends TestCase{


   
    public function testadd_to_cart_controller(): void

    {    
        $p_id=5;
        $qty=2;
        $ip_add="78.0.23";
        $details="food";
        $size="25*45";
        $this->assertIsBool(

            add_to_cart_controller($p_id,$qty,$ip_add,$details,$size)
        );

    }


    public function testselect_cart_by_cid_controller(): void

    {    
        $id= 10;

        $this->assertIsArray(

            select_cart_by_cid_controller($id)

        );

    }

    public function testclear_cart_controller(): void

    {    
        $CID= 10;

        $this->assertIsBool(

            clear_cart_controller($CID)

        );

    }

    public function testupdate_quantity_controller(): void

    {    
        $PID= 10;
        $quantity= 5;
        $ip_add= "0.0.188";


        $this->assertIsBool(

            update_quantity_controller($PID, $quantity,$ip_add)

        );

    }
   
    
 


 

}