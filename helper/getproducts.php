<?php
#prints out all the products
$query = "SELECT * FROM product";
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed.");
}


while ($row = mysqli_fetch_assoc($result)) {
     echo '<input type="radio" name="purchases" value="';
     echo $row["productID"];
     echo '" checked="checked">' . $row["description"] . " -- " . $row["cost"] . "<br>";

}
mysqli_free_result($result);
?>

