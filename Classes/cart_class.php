<?php

require('../Settings/connection.php');


class Cart extends Connection{

//adds to cart when not logged in
function add_to_cart($p_id,$qty,$ip_add,$details,$size){
	// return true or false
	return $this->query("insert into cart(p_id,qty,ip_add,details,size) values('$p_id','$qty','$ip_add','$details','$size')");
}

//Adds to cart when logged in
function quick_add($p_id,$ip_add,$qty){
    // return true or false
    return $this->query("insert into cart(p_id,ip_add,qty) values('$p_id','$ip_add','$qty')");
}

//updates customer id when customer logs in
function update_ID($CID,$ip_add ){
	// return true or false
	return $this->query("update cart  set c_id='$CID' where ip_add = '$ip_add'");
}	

//shows cart when not logged in
	function select_cart_by_ip($ip_add){
		return $this->fetch("select * from cart inner join products on cart.p_id = products.product_id where ip_add= '$ip_add'");

	}

//shows cart when logged in
	function select_cart_by_cid($CID){
		return $this->fetch("select * from cart inner join products on cart.p_id = products.product_id where c_id= '$CID'");

	}


//checks if products are in cart
	function select_product_incart($p_id,$ip_add){
		// return associative array or false
		return $this->fetchOne("select * from cart where p_id='$p_id' AND ip_add = '$ip_add'");
	}
//updatiing the quantity
	function update_quantity($PID, $quantity,$ip_add){
		// return true or false
		return $this->query("update cart  set qty='$quantity' where p_id = '$PID' AND ip_add = '$ip_add'");
	}	
//deleting product from cart
	function delete_product_fromcart($id){
		// return true or false
		return $this->query("delete from cart where p_id = '$id'");
	}


//ORDERS
//inserts into order table
	
    function add_order($customer_id, $invoice_no, $order_date, $order_status,$amount){
        return $this->query("insert into orders (customer_id, invoice_no, order_date, order_status,amt) values('$customer_id','$invoice_no', '$order_date', '$order_status','$amount')");
    }


	function add_order_details($order_id, $product_id, $qty,$details,$size){
        return $this->query("insert into orderdetails (order_id,product_id,	qty,details,size) values('$order_id','$product_id', '$qty','$details','$size')");
    }
        
    function get_last_order(){
        return $this ->fetchOne("select max(order_id) as currentOrder from orders");
    }

     //inserts payment
     function payment_cart($amount,$customer_id,$order_id,$currency,$payment_date){
        return $this->query("insert into payment (amt,customer_id,order_id,currency,payment_date) values ('$amount','$customer_id','$order_id','$currency','$payment_date')");
    }

    //Clear cart
    function clear_cart($CID){
        return $this->query("delete from cart where c_id ='$CID'");
    }

	function select_order($order_id){
        return $this->fetchOne("select * from orders inner join customers on (customers.customer_id = orders.customer_id) where orders.order_id = '$order_id'");
    }

    function select_orderDetails($order_id){
        return $this->fetch("select * from orderdetails join products on (orderdetails.product_id = products.product_id) join orders on (orderdetails.order_id = orders.order_id) where orderdetails.order_id = '$order_id'");
    }

	
	//order owner details 
	function select_user($CID,$order_id){
		return $this->fetchOne("select * from orders join customers on orders.customer_id = customers.customer_id where orders.customer_id= '$CID' AND orders.order_id ='$order_id'");

	}

	function select_customer($CID){
		return $this->fetchOne("select * from cart join customers on cart.c_id = customers.customer_id where customers.customer_id= '$CID'");

	}

	function select_images($product_id){
		// return true or false
			return $this->fetch("select * from image where product_id = '$product_id'");
		}

	//order owner details 
	function select_payment($order_id){
		return $this->fetchOne("select * from payment where order_id ='$order_id'");

	}



}



?>