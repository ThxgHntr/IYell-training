<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "employee_management";
try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    echo "Error!!! " . $e->getMessage();
}
