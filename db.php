<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("localhost","root","");
// Check connection
// if (!$con){
//       die("sorry we failed to connect:".mysqli_connect_error());
// }
// else{
//       echo "connection was successsful";
// }
echo "<br>";
// Creating a database
$sql = "CREATE DATABASE medicare";
// $result = mysqli_query($con, $sql);

// Check for the connection to database
// echo "the result is ";
// echo var_dump($result);
// echo "<br>";
?>