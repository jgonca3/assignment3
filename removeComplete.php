<!DOCTYPE html>
<html>
<head>
<title>Walmart</title>
</head>
<body>
<hr>
<h1>Walmart</h1>

<h2>Removed Customer</h2>
   <a href=home.php>Return to Home</a> <br />
   <a href=remove.php>Remove Another Customer</a> <br />
<hr/>

<!--includes database-->
<?php
   include 'helper/database.php';
?>

<?php
$customerID = $_POST["customers"];

#deletes customer
$deleteQuery = 'DELETE FROM customer WHERE customerID=' . $customerID;

if( !mysqli_query($connection, $deleteQuery) ) {
   die('Error: Deletion Failed: ' . mysqli_error($connection));
}
?>

<?php
mysqli_close($connection);
?>
</body>
</html>

