<!DOCTYPE html>
<html>
<head>
<title>Walmart</title>
</head>
<body>
<hr>
<h1>Walmart</h1>

<!--header and links-->
<h2>Added Customer</h2>
   <a href=home.php>Return to Home</a> <br />
   <a href=add.php>Add More Customers</a> <br />
<hr/>

<!--include database-->
<?php
   include 'helper/database.php';
?>

<?php
#setting up variables
$lastname = $_POST["lastname"];
$firstname = $_POST["firstname"];
$city = $_POST["city"];
$phone = $_POST["phone"];
$agentID = $_POST["agent"];
$newID = $_POST["customerID"];

#checking vairables were filled in
if($lastname == '' || $firstname == '' || $city == '' || $phone == '' || $newID == '') {
   die('Error: Please leave no fields blank, Customer not added.');
}

#inserting new customer
$insertQuery = 'INSERT INTO customer VALUES (' . $newID . ', ' . $firstname . ', ' . $lastname . ', ' . $city . ', ' . $phone . ', ' . $agentID . ')';

#if error
if( !mysqli_query($connection, $insertQuery) ) {
   die('Error: Insertion Failed: ' . mysqli_error($connection));
}



?>

<?php
mysqli_close($connection);
?>
</body>
</html>

