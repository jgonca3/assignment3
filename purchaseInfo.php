<!DOCTYPE html>
<html>
<head>
<title>Walmart</title>
</head>
<body>
<hr>
<h1>Walmart</h1>

<h2>Customer Purchases</h2>
   <a href=home.php>Return to Home</a> <br />
   <a href=customerInfo.php>Return to Customer Info</a> <br />
<hr/>
<!--include database-->
<?php
   include 'helper/database.php';
?>

<h1>Here are your purchases:</h1>
<h4>Cost - Description - Quantity</h4>
<ol>
<!--queryies the customer's purchase info-->
<?php
   $whichCust= $_POST["customers"];
   $query = "SELECT * FROM product JOIN purchase ON product.productID=purchase.productID WHERE purchase.customerID='" . $whichCust . "'";
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
   #prints out a customers purchases
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["cost"] . " -- " . $row["description"] . " -- " . $row["quantity"] . "<br>";
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>

