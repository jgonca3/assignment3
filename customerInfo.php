<!DOCTYPE html>
<html>
<head>
<title>Walmart</title>
</head>
<body>
<hr>
<h1>Walmart</h1>

<h2>Customer Information</h2>
   <a href=home.php>Return to Home</a> <br />
<hr/>
<!--Include database-->
<?php
   include 'helper/database.php';
?>
<h1>Customers</h1>
<h4>Lastname, Firstname, CustomerID, City, Phone, AgentID</h4>
<!--prints all customer info to choose and check ones purchases-->
<form action="purchaseInfo.php" method="post">
<?php
   include 'helper/getdata.php';
?>
<input type="submit" name="purchases" value="Get Customer Products">
</form>
<hr>

<?php
mysqli_close($connection);
?>
</body>
</html>
