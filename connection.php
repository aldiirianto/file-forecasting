<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "forecast_app"; 

$conn=mysqli_connect($server,$username,$password);
mysqli_select_db($conn,$database);

?>
