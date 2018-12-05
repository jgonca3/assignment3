<?php
#prints out all the agents
$query = "SELECT * FROM agent";
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed.");
}


while ($row = mysqli_fetch_assoc($result)) {
     echo '<input type="radio" name="agent" value="';
     echo $row["agentID"];
     echo '" checked="checked">' . $row["lastname"] . ', ' . $row["firstname"] . ' -- ' . $row["agentID"] . '<br>';

}
mysqli_free_result($result);
?>

