

<?php
$custid=0;
if($_SESSION['usertype']!='?'&&$_SESSION['usertype']!='admin')
	 $custid=$_SESSION['usertype'];
$sql="INSERT INTO orders (Customer,oDate) VALUES ($custid,CURDATE())";
mysqli_query($connect,$sql);
$sql="SELECT MAX(ID) as max FROM orders";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
foreach($_SESSION['cart'] as $pid => $quantity){
	$sql="INSERT INTO orderdetails (Orders,Quantity,Product) VALUES ($row[max],$quantity,$pid)";
	mysqli_query($connect,$sql);
}
unset($_SESSION['cart']);
echo "<h1>THANKS FOR YOUR MONEY</h1>";
?>