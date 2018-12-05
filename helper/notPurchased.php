<?php
#prints all the products not yet purchased
$query = "SELECT * FROM product WHERE productID NOT IN (SELECT productID FROM purchase)";
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed.");
}


while ($row = mysqli_fetch_assoc($result)) {
   echo '<li>';
   echo $row["productID"] . ' -- ' . $row["description"];
     
}
mysqli_free_result($result);
?>




