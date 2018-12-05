<?php
#prints out all the customers
$query = "SELECT * FROM customer ORDER BY lastname";
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed.");
}


while ($row = mysqli_fetch_assoc($result)) {
     echo '<input type="radio" name="customers" value="';
     echo $row["customerID"];
     echo '" checked="checked">' . $row["lastname"] . ", " . $row["firstname"] . " -- " . $row["customerID"] . " -- " . $row["city"] . " -- " . $row["city"] . " -- " . $row["phone"] . " -- " . $row["agentID"] . "<br>";
   
}
mysqli_free_result($result);
?>
