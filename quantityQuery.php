<!DOCTYPE html>
<html>
<head>
<title>Walmart</title>
</head>
<body>
<hr>
<h1>Walmart</h1>

<h2>Quantity Query</h2>
   <a href=home.php>Return to Home</a> <br />
   <a href=purchases.php>Complete More Queries</a> <br />
<hr/>
<!--includes database-->
<?php
   include 'helper/database.php';
?>

<h4>ProductID - CustomerID - Quantity</h4>

<?php
#varaibles
$productID = $_POST["purchases"];
$quantity2 = $_POST["quantity2"];

if($quantity2 == '') {
   die("Error: quantity left blank.");
}

#query to select all info from products above a certain quantity
$query = "SELECT * FROM purchase WHERE quantity >=' . $quantity2 . ' AND productID=" . $productID;
$result = mysqli_query($connection,$query);
if (!$result) {
   die("databases query failed.");
}

#prints out info
while ($row = mysqli_fetch_assoc($result)) {
   echo "<li>";
   echo $row["productID"] . ' -- ' . $row["customerID"] . ' -- ' . $row["quantity"];

}


?>
<h4></h4>
<?php
mysqli_close($connection);
?>
</body>
</html>

