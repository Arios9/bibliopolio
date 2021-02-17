

<?php
echo '<h1>MY ORDERS</h1>';
$sql="SELECT * FROM orders";
$result = mysqli_query($connect,$sql);
$resultcheck = mysqli_num_rows($result);
if($resultcheck){
	echo "<style>table,th,td{border: 1px solid black;}th,td{text-align:center;}table{width:30%;}</style>";
	echo  '<table>';
	echo "<tr><th>ID</th><th>Customer</th><th>DATE</th></tr>";
	while($row=mysqli_fetch_assoc($result)){
		echo "<tr><td>$row[ID]</td><td>$row[Customer]</td><td>$row[oDate]</td></tr>";
	}
	echo  '</table>';
}
?>

