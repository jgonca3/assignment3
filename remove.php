<!DOCTYPE html>
<html>
<head>
<title>Walmart</title>
</head>
<body>
<hr>
<h1>Walmart</h1>

<h2>Remove Customers</h2>
   <a href=home.php>Return to Home</a> <br />
<hr/>
<h2>Remove Customer</h2>
<!--includes database-->
<?php
   include 'helper/database.php';
?>
<h4>Lastname, Firstname, CustomerID, City, Phone, AgentID</h4>

<form action="removeComplete.php" method="post">
<!--prints out all customers-->
<?php
   include 'helper/getdata.php';
?>
<input type="submit" name="remove" value="Remove Customer">

<?php
mysqli_close($connection);
?>
</body>
</html>


