<!DOCTYPE html>
<html>
<head>
<title>Walmart</title>
</head>
<body>
<hr>
<h1>Walmart</h1>

<h2>Purchase Complete</h2>
   <a href=home.php>Return to Home</a> <br />
   <a href=purchaseProducts.php>Return to Purchase Products</a> <br />
<hr/>
<!--include database-->
<?php
   include 'helper/database.php';
?>

<!--variables-->
<?php
$customerID = $_POST["customers"];
$productID = $_POST["purchases"];
$quantity = $_POST["quantity"];

#checks info was filled out
if($quantity == '') {
   die('Error: please enter a quantity');
}

#query and then insert
$insertQuery = 'INSERT INTO purchase VALUES (' . $customerID . ', ' . $productID . ', ' . $quantity . ')';

if( !mysqli_query($connection, $insertQuery) ) {
   die('Error: Insertion Failed: ' . mysqli_error($connection));
}


?>

<?php
mysqli_close($connection);
?>
</body>
</html>



