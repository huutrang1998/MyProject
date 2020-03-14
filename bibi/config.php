<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bibi";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>