<?php 
echo "<td>" . anchor("cart/displayCart",'View Cart') . "</td> <t>";
echo "<td>" . anchor("checkout",'Checkout') . "</td> <t>";
echo "<td>" . anchor("home/logout",'Logout') . "</td>";

?>
<h2>Product Table</h2>
<?php 

		echo "<table>";
		echo "<tr><th>Name</th><th>Description</th><th>Price</th><th>Photo</th></tr>";
		
		foreach ($products as $product) {
			echo "<tr>";
			echo "<td>" . $product->name . "</td>";
			echo "<td>" . $product->description . "</td>";
			echo "<td>" . $product->price . "</td>";
			echo "<td><img src='" . base_url() . "images/product/" . $product->photo_url . "' width='100px' /></td>";
			
			echo "<td>" . anchor("cart/read/$product->id",'View') . "</td>";
				
			echo "</tr>";
		}
		echo "</table>";
?>	

