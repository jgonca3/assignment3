<!DOCTYPE html>
<html>
<head>
<title>Walmart</title>
</head>
<body>
<hr>
<h1>Walmart</h1>

<h2>Item Details</h2>
   <a href=home.php>Return to Home</a> <br />
   <a href=purchases.php>Perform More Queries</a> <br />
<hr/>
<h4>ProductID, Description, Cost, Money Made</h4>
<!--include database-->
<?php
   include 'helper/database.php';
?>

<?php
#sets vairbale and queries for all products with that product ID
$productID = $_POST["purchases"];

$query = 'SELECT * FROM product WHERE productID=' . $productID;
$result = mysqli_query($connection,$query);

if( !mysqli_query($connection, $result) ) {
   die('Error: ' . mysqli_error($connection));
}
#calculates the money made
$moneyMade = $row["cost"] * $row["quantity"];

$row = mysqli_fetch_assoc($result);
#prints the info of the product
echo $productID . ' -- ' . $row["description"] . ' -- ' . $row["cost"] . ' -- ' . $moneyMade;

?>


<?php
mysqli_close($connection);
?>
</body>
</html>

