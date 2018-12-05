<!DOCTYPE html>
<html>
<head>
<title>Walmart</title>
</head>
<body>
<hr>
<h1>Walmart</h1>

<h2>Products</h2>
   <a href=home.php>Return to Home</a> <br />
<hr/>
<!--include database-->
<?php
   include 'helper/database.php';
?>
<h1>All Products:</h1>

<h4>ProductID - Description - Cost - Quantity</h4>
<ol>
<?php
   #query for all products
   $query = "SELECT * FROM product ORDER BY description";
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query failed.");
     }
   #prints all the product info
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["productID"] . " -- " . $row["description"] . " -- " . $row["cost"] . " -- " . $row["quantity"];
     }
     mysqli_free_result($result);
?>
</ol>

<a href=purchaseProducts.php>Purchase Products</a> <br />

<hr>

<h2>Products Not Purchased</h2>
<h4>ProductID, Description</h4>
<!--shows all items not purchased-->
<?php
   include 'helper/notPurchased.php'
?>   



<?php
   mysqli_close($connection);
?>
</body>
</html>
