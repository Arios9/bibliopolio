
<?php
echo '<h2>Your CART</h2>';

if(empty($_SESSION['cart'])) {
 $_SESSION['cart']=array();
 echo 'The cart is empty!';
}
else{
$sum=0;
echo '<table>';
foreach($_SESSION['cart'] as $pid => $quantity)
{
	
	$sql ="select * from product where ID=$pid";
	$result = mysqli_query($connect,$sql);
	$row=mysqli_fetch_assoc($result);
	$sum+=$quantity*$row['Price'];
	echo "<tr><td>".$row['Title']."</td><td>$quantity X $row[Price] = ".($quantity*$row['Price'])."&euro;</td></tr>";
} 
	echo "<tr><td>Sunolo</td><td>$sum&euro;</td></tr>";
	echo '</table>';
	echo "<a href='?p=bye' class='btn btn-primary'>BYE</a>
		<a href='?p=empty_cart' class='btn btn-primary'>EMPTY CART</a>";
}



?>
