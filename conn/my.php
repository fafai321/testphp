<?php
$servername = "plearnja_cpsu5";
$username = "plearnja_cpsu5";
$password = "7zXVn3d8ec";
$dbname = "MyDB2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
