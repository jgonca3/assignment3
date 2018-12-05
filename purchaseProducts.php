<!DOCTYPE html>
<html>
<head>
<title>Walmart</title>
</head>
<body>
<hr>
<h1>Walmart</h1>

<h2>Purchase Products</h2>
   <a href=home.php>Return to Home</a> <br />
<hr/>

<h4>Lastname, Firstname, CustomerID, City, Phone, AgentID</h4>
<!--include database-->
<?php
   include 'helper/database.php';
?>

<form action="purchaseComplete.php" method="post">
<!--prints out all customers-->
<?php
   include 'helper/getdata.php';
?>

<h3></h3>
<h4>Description, Cost</h4>

<?php
   include 'helper/getproducts.php';
?>
<!--fields for filling in quantity and button-->
<input type="text" name="quantity" placeholder="Quantity" id="quantity" size="15">
<input type="submit" name="purchaseProduct" value="Confirm Purchase">
</form>

<?php
   mysqli_close($connection);
?>
</body>
</html>

