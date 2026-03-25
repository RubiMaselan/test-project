<?php
$host = "localhost";
$user = "root";
$password = ""; // Ideally use environment variables
$dbname = "test_db";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed");
}
?>