<?php

require('admin_class.php');



function select_all_orders_controller(){
    // create an instance of the admin class
    $admin_instance = new Admin();
    // call the method from the class
    return $admin_instance->select_all_orders();

}

function select_count_orders_controller(){
    // create an instance of the admin class
    $admin_instance = new Admin();
    // call the method from the class
    return $admin_instance->select_count_orders();

}

function select_count_categories_controller(){
    // create an instance of the admin class
    $admin_instance = new Admin();
    // call the method from the class
    return $admin_instance->select_count_categories();

}

function select_count_customers_controller(){
    // create an instance of the admin class
    $admin_instance = new Admin();
    // call the method from the class
    return $admin_instance->select_count_customers();

}
function select_count_sales_controller(){
    // create an instance of the admin class
    $admin_instance = new Admin();
    // call the method from the class
    return $admin_instance->select_count_sales();

}
function select_count_products_controller(){
    // create an instance of the admin class
    $admin_instance = new Admin();
    // call the method from the class
    return $admin_instance->select_count_products();

}

//updating order status

function select_one_order_controller($order_id){
    // create an instance of the Product class
    $admin_instance = new Admin();
    // call the method from the class
    return $admin_instance->select_one_order($order_id);

}

function update_orderstatus_controller($order_id,$order_status){
    // create an instance of the Admin class
    $admin_instance = new Admin();
    // call the method from the class
    return $admin_instance->update_product_status($order_id,$order_status);

}

function delete_order_controller($id){
    // create an instance of the product class
    $product_instance = new Admin();
    // call the method from the class
    return $product_instance->delete_one_order($id);

}


//Category

function add_category_controller($category){
    // create an instance of the category class
    $category_instance = new Category();
    // call the method from the class
    return $category_instance->add_category($category);

}

function select_category_details_controller($category){
    // create an instance of the category class
    $category_instance = new Category();
    // call the method from the class
    return $category_instance->select_category_details($category);
}

function select_all_categories_controller(){
    // create an instance of the category class
    $category_instance = new Category();
    // call the method from the class
    return $category_instance->select_all_categories();
    }
function update_category_controller($cat_id, $cat_name){
    // create an instance of the category class
    $category_instance = new Category();
    // call the method from the class
    return $category_instance->update_one_category($cat_id, $cat_name);
    }
 function select_one_category_controller($cat_id){
    // create an instance of the category class
    $category_instance = new Category();
    // call the method from the class
    return $category_instance->select_one_category($cat_id);


}
function delete_category_controller($cat_id){
    // create an instance of the category class
    $brand_instance = new Category();
    // call the method from the class
    return $brand_instance->delete_category($cat_id);


}


//Product
function add_product_controller($category,$brand,$title,$price,$desc,$image,$keywords,$tags){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->add_product($category,$brand,$title,$price,$desc,$image,$keywords,$tags);

}


function delete_product_controller($id){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->delete_one_product($id);

}

function select_one_product_controller($id){
    // create an instance of the category class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_one_product($id);
}

//
function get_last_product_controller(){
    //create instance of the cart class
    $product_instance = new Product();
    //calls method from cart class
    return $product_instance->get_last_product();
}

//adding an image controller
function add_image_controller($pid,$image_path){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->add_image($pid,$image_path);

}
//selecting images attached to a product
function select_images_controller($pid){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_images($pid);

}

function delete_image_controller($image_id){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->delete_one_image($image_id);

}

function update_product_controller($title,$product_id,$category,$brand,$price,$desc,$keywords){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->update_one_product($title,$product_id,$category,$brand,$price,$desc,$keywords);

}

function select_all_products_controller(){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_products();

}




function select_product_by_title_controller($title){
    // create an instance of the product class
    $product_instance = new Product();

    // call the method from the class
    return $product_instance->select_product_by_title($title);

}



function select_product_by_desc_controller($desc){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_product_by_desc($desc);

}


function select_product_category_controller($category){
    // create an instance of the product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_product_category($category);

}

function select_category_controller($category){
    // create an instance of the category class
    $category_instance = new Category();
    // call the method from the class
    return $category_instance->select_category($category);

}

function search_product_controller($name){
    $product_instance = new Product();
    return $product_instance->search_product($name);
}


?>