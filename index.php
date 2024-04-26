<?php

/*
File: index.php
Author: Ramjay Romorosa
Purpose: View Products
*/
/*
$product_name = "Stratocaster Guitar";
$product_price = 124.99;
$product_category = "Guitar";
$product_description = "Most Stratocasters have three single-coil pickups, a pickup selector switch, one volume control and two tone controls.";
 Simple Array
$products[0]['name'] = 'Stratocaster Guitar';
$products[0]['price'] = 124.99;
$products[0]['category'] = 'Guitar';
$products[0]['description'] = 'Most Stratocasters have three single-coil pickups, a pickup selector switch, one volume control and two tone controls';
*/
 // Products 1 dimensional array
 // Define product information
 $products[0] = array(
	'name' => 'Stratocaster Guitar',
	'price' => '124.99',
	'category' => 'Guitar',
	'description' => 'Most Stratocasters have three single-coil pickups, a pickup selector switch, one volume control and two tone controls.'
);	

 $products[1] = array(
	'name' => 'Telecaster Guitar',
	'price' => '114.99',
	'category' => 'Guitar',
	'description' => 'Most Telecasters have two single-coil pickups, a pickup selector switch, a single volume control and a single tone control.'
);	

echo "<h2 style='text-align:center;'>Welcome To Wall Guitar Shop!</h2>
<h3>Our Products</h3>";

// Loop to display all products
foreach($products as $product) {
	echo "<p>
		<span style='font-weight:bold;'>" . $product['name'] . "</span><br />" .
		"Price: $" . $product['price'] . "<br />" .
		"Category: " . $product['category'] . "<br />" .
		$product['description'] . 
	"</p>"; 
}
/*
<p>
	" . $products[0]['name'] . "<br />
	Price: $" . $products[0]['price'] . "<br />
	Category: " . $products[0]['category'] . "<br />
	" . $products[0]['description'] . "<br />
	<br />
	" . $products[1]['name'] . "<br />
	Price: $" . $products[1]['price'] . "<br />
	Category: " . $products[1]['category'] . "<br />
	" . $products[1]['description'] . "<br />
</p>"	
*/
?>