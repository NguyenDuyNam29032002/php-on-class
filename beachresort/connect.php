<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "ltmt";
$conn = mysqli_connect($server, $user, $pass, $database);
mysqli_query($conn, 'SET NAMES "utf8"');
