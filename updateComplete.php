<!DOCTYPE html>
<html>
<head>
<title>Walmart</title>
</head>
<body>
<hr>
<h1>Walmart</h1>

<h2>Updated Phone Number</h2>
   <a href=home.php>Return to Home</a> <br />
   <a href=updatePhone.php>Update Another Number</a> <br />
<hr/>
<!--includes database-->
<?php
   include 'helper/database.php';
?>

<?php
#sets up variables
$customerID = $_POST["customers"];
$newPhone = $_POST["newPhone"];

#checks variables were filled out
if($newPhone == '') {
   die('Error: please enter a valid phone number');
}

#updates the phone number
$updateQuery = 'UPDATE customer SET phone=' . $newPhone . ' WHERE customerID=' . $customerID;

if( !mysqli_query($connection, $updateQuery) ) {
   die('Error: Update Failed: ' . mysqli_error($connection));
}

?>





<?php
mysqli_close($connection);
?>
</body>
</html>

