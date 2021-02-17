

<?php

	$u = $_REQUEST['username'];
	$pa = $_REQUEST['pass'];
	
	$sql = "select * from customer where uname='$u' and passwd='$pa'";//nikos,kostas
	$result = mysqli_query($connect,$sql);
	$resultcheck = mysqli_num_rows($result);

	
	
	if($u == 'admin' && $pa=='123') 
		$_SESSION['usertype'] = 'admin';
	elseif($resultcheck){
		$row=mysqli_fetch_assoc($result);
		$_SESSION['usertype'] = $row['ID'];		
	}else{ 
		print "Unknown user";
		$_SESSION['usertype'] = '?';
	}
	
	header("Location:index.php");
	
?>