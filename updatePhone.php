<!DOCTYPE html>
<html>
<head>
<title>Walmart</title>
</head>
<body>
<hr>
<h1>Walmart</h1>

<h2>Update Phone Number</h2>
   <a href=home.php>Return to Home</a> <br />
<hr/>
<!--includes database-->
<?php
   include 'helper/database.php';
?>

<form action="updateComplete.php" method="post">
<?php
   #prints out customer info
   include 'helper/getdata.php';
?>
<!--text box for the phone number and button-->
<input type="text" name="newPhone" placeholder="New Number" id="newPhone" size="15"><br>
<input type="submit" name="updatePhone" value="Update Phone Number">
</form>








<?php
mysqli_close($connection);
?>
</body>
</html>

