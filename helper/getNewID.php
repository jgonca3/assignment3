<?php
   include 'database.php';
?>

<?php
#gets the new (max) ID
$query = 'SELECT MAX(customerID) as newID from customer';
$result = mysqli_query($connection, $query);
if (!$result) {
   die("Error creating ID!");
}
$row = mysqli_fetch_assoc($result);
$newID = intval($row["MaxID"]) + 11;
?>
