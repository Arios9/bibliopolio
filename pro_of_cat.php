<table>
<tr>
<th>Name</th>
<th>Price</th>
</tr>
<?php
$cat = $_REQUEST['catid'];
$sql ="select * from product where Category=$cat";
$result = mysqli_query($connect,$sql);
$resultcheck = mysqli_num_rows($result);

if($resultcheck){
	while($row=mysqli_fetch_assoc($result)){
	echo "<tr><td><a href=\"?p=productinfo&pid=$row[ID]\">$row[Title]</a></td>".
			"<td>$row[Price]&euro;</td></tr>";
	}
}
?>
</table>
