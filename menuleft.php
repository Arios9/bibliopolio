
<?php

$sql = 'select * from category';
$result = mysqli_query($connect,$sql);
$resultcheck = mysqli_num_rows($result);

if($resultcheck){
	echo '<h2>PRODUCTS MENU</h2>';
	echo '<ul class="nav nav-pills flex-column">';
	while($row=mysqli_fetch_assoc($result)){
		print "<li class=\"nav-item\">
		<a class=\"nav-link\" href='?p=catinfo&catid=$row[ID]'>".
				"$row[Name]</a></li>";
	}
	echo '</ul>';
}
?>


