<?php include_once 'connect.php';?>
<!DOCTYPE html>
<head>
<title>BOOKS</title>

<link href="bootstrap/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/dashboard.css" rel="stylesheet">

</head>

<body>
 <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <p class="navbar-brand">BOOKS</p>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php?p=start">START</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=shopinfo">OUR SHOP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=products">OUR PRODUCTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=cart">KALATHI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=login">Login</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="?p=contact">CONTACT</a>
            </li>        
			</ul>
        </div>
      </nav>
    </header>
<div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
<?php 
include 'menuleft.php';
session_start();
if(!isset($_SESSION['usertype'])) {$_SESSION['usertype']='?';}

if($_SESSION['usertype']!='?'){
if($_SESSION['usertype']=='admin'){echo '<h2>Admin MENU</h2><ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="?p=MyProducts">LISTA PRODUCTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=Orders">LISTA ORDERS</a>
            </li> 
			</ul>';}
		  echo '<h2>User MENU</h2><ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="?p=MyOrders">EMFANISH PARAGELION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=MyDetails">STOIXEIA PELATH</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=Logout">Logout</a>
            </li>            
          </ul>';
}
?>
		</nav>
<main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
<p>

<?php
if( ! isset($_REQUEST['p'])) {
	$_REQUEST['p']='start';
}
$p = $_REQUEST['p'];
switch ($p){
case "start" :		include "start.php";
					break;
case "shopinfo": 	include "shopinfo.php";
					break;
case "products": 	include "products.php";
					break;
case "cart": 		include "cart.php";
					break;					
case "login" :		include "login.php";
					break;
case "contact":		include "contact.php";
					break;
case "do_login":	include "do_login.php";
					break;
case "MyOrders":	include "MyOrders.php";
					break;
case "MyDetails":	include "MyDetails.php";
					break;
case "Logout":		include "Logout.php";
					break;
case "MyProducts":	include "MyProducts.php";
					break;
case "Orders":		include "Orders.php";
					break;
case "catinfo":		include "pro_of_cat.php";
					break;
case "productinfo":	include "productinfo.php";
					break;
case "empty_cart":	include "empty_cart.php";
					break;
case "bye":			include "bye.php";
					break;

default: 
	echo "PAGE NOT FOUND";
}
?>


</p>     </main>
      </div>
    </div>
    
    <script src="bootstrap/jquery-3.2.1.slim.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    

</body>

</html>