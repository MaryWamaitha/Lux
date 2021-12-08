<?php
function item_total($price,$qty){
	$total=$price*$qty;
	return $total;
}

function type ($size){

	if ($size==1){
		$price=1500;
		$type='25*18';
	}
	elseif ($size==2){
		$price=4000;
		$type='36*24';
	}
	else{
		$price=10000;
		$type='4*3';
		
	}
	return $type;
}

function price ($size){

	if ($size==1){
		$price=0.5;
		
	}
	elseif ($size==2){
		$price=4000;
		
	}
	else{
		$price=10000;
	}
	
	return $price;
}
?>
