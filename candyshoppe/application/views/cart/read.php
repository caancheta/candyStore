<h2>Product Entry</h2>
<?php 
	echo "<p> ID = " . $product->id . "</p>";
	echo "<p> NAME = " . $product->name . "</p>";
	echo "<p> Description = " . $product->description . "</p>";
	echo "<p> Price = " . $product->price . "</p>";
	echo "<p><img src='" . base_url() . "images/product/" . $product->photo_url . "' width='100px'/></p>";
	echo "<p>" . anchor("cart/addToCart/$product->id/$product->name/$product->price ",'Add to Cart') . "</p>";
?>	

