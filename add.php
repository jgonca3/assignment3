<!DOCTYPE html>
<html>
<head>
<title>Walmart</title>
</head>
<body>
<hr>
<h1>Walmart</h1>

<!--header and links-->
<h2>Add Customers</h2>
   <a href=home.php>Return to Home</a> <br />
<hr/>

<!--include database-->
<?php
   include 'helper/database.php';
?>

<!--boxes to fill out customer info-->
<h2>Add Customer</h2>
<form action="addComplete.php" method="post">
<input type="text" name="lastname" placeholder="Lastname" id="lastname" size="15">
<input type="text" name="firstname" placeholder="Firstname" id="firstname" size="15">
<input type="text" name="city" placeholder="City" id="city" size="15">
<input type="text" name="phone" placeholder="Phone" id="phone" size="15">
<input type-"text" name="customerID" placeholder="Enter Given ID -->" id="custoemrID" size="15">

<!--shows max ID to use-->
<?php
   include 'helper/getNewID.php';
   echo '<tr><td><label for="customerID"> CustomerID:</label>';
   echo '<td><b>' . $newID  . '</b>';
?>
<h4>Lastname, Firstname, AgentID</h4>

<!--shows all agents-->
<?php
   include 'helper/getagent.php';
?>

<input type="submit" name="add" value="Add Customer">

<?php
mysqli_close($connection);
?>
</body>
</html>


