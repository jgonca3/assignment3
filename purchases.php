<!DOCTYPE html>
<html>
<head>
<title>Walmart</title>
</head>
<body>
<hr>
<h1>Walmart</h1>

<h2>Product Queries</h2>
   <a href=home.php>Return to Home</a> <br />
<hr/>
<!--includes database-->
<?php
   include 'helper/database.php';
?>
<h2>Products Purchased</h2>
<h4>Description - Cost</h4>

<form action="productDetails.php" method="post">
<!--includes all products and shows how much have sold and money made-->
<?php
   include 'helper/getproducts.php';
?>

<input type="submit" name="itemDetials" value="View Item Details">
</form>

<hr>

<h2>Quantity Query</h2>
<h4>Description - Cost</h4>

<!--shows all the products over a certain quantity-->
<form action="quantityQuery.php" method="post">
<?php
   include 'helper/getproducts.php';
?>

<input type="text" name="quantity2" placeholder="Quantity" id="quantity2" size="15">
<input type="submit" name="quantityQuery" value="View Item Details">
</form>



<?php
mysqli_close($connection);
?>
</body>
</html>

