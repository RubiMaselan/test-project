<?php
$host = "localhost";
$user = "root";
$password = getenv('MYSQL_SECURE_PASSWORD');
$conn = new mysqli($servername, $username, $password);
$dbname = "test_db";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

