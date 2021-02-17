
<?php
session_start();
if(empty($_SESSION['cart'])) 
{$_SESSION['cart']=array();}
$pid = $_REQUEST['pid']; 
if(empty($_SESSION['cart'][$pid]))
{$_SESSION['cart'][$pid]=0;}
$_SESSION['cart'][$pid] += $_REQUEST['quantity'];

header("Location:index.php?p=cart");

?>