<?php
#connects to the database
$dbhost = "localhost";
$dbuser= "root";
$dbpass = "Iamtheking123";
$dbname = "jgonca3assign2db";
$connection = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
if (mysqli_connect_errno()) {
     die("database connection failed :" .
     mysqli_connect_error() .
     "(" . mysqli_connect_errno() . ")"
         );
    }
?>

