<?php

$pro = $_REQUEST['pid'];
$sql ="select * from product where ID=$pro";
$result = mysqli_query($connect,$sql);
$resultcheck = mysqli_num_rows($result);

if($resultcheck){
	$row=mysqli_fetch_assoc($result);
	echo "<b>$row[Title]</b><p>$row[Description]</p>";
	echo "<form action='addtocart.php' method='post'>
				<input type='number' value='1' min='1' step='1' name='quantity'>
				<input type='submit' value='ADD' class='btn btn-primary'>
				<input type='hidden' name='pid' value='$pro'> 
		  </form>";
}
?>