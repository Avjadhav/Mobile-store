	
<?php

	session_start();
	
	
if(isset($_SESSION['cart']) & !empty($_SESSION['cart'])){
	$items = $_SESSION['cart'];
	$cartitems = explode(",", $items);
	$items .= "," . $_GET['id'];
	$_SESSION['cart'] = $items;
	header('location: cart.php?status=success');
}else{
	$items = $_GET['id'];
	$_SESSION['cart'] = $items;
	header('location: cart.php?status=success');
}