<?php

$host = 'localhost';
$dbname = 'tables';
$username = 'root';
$password = 'linuxfinally'; 

$conn = new mysqli($host, $dbname, $username, $password);

if ($conn->connection_error) {
    die("Connection failed:" . $conn->connection_error);
}
?>