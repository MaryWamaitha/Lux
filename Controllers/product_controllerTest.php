<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

 

// Include config file

 
include_once ('D:\e-commerce\htdocs\Lux\Controllers\product_controller.php');

// All ids passed  must be set in the prisonerController class respective methods

final class product_controllerTest extends TestCase{


    public function testadd_category_controller(): void

    {    
        $category = "Animals";

        $this->assertIsBool(

            add_category_controller($category)

        );

    }

    public function testselect_all_categories_controller(): void

    {    

        $this->assertIsArray(

            select_all_categories_controller()

        );

    }

    public function testadd_product_controller(): void

    {    
        $category = "Animals";
        $title = "Zebra today";
        $price= "2000";
        $desc= "Animals";

        $this->assertIsBool(

            add_product_controller($category,$title,$price,$desc)

        );

    }

    public function testselect_all_products_controller(): void

    {    
        

        $this->assertIsArray(

            select_all_products_controller()

        );

    }

    public function testdelete_product_controller(): void

    {    
        $id= 10;

        $this->assertIsBool(

            delete_product_controller($id)

        );

    }

    
 


 

}