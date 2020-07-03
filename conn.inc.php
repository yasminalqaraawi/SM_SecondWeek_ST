<?php
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "root";
$dBName = "RobotControl";
$connection = mysqli_connect($servername, $dBUsername,$dBPassword,$dBName);
if (!$connection) {die("Connection failed: " . mysqli_connect_error());}

?>
