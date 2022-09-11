<?php

// connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "MUSEUM_VIEW_HOTEL";

// initialize connection object
$con = null;

try {
    $conn = new PDO("mysql:host=" . $servername . ";dbname=" . $dbName, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failure: " . $e->getMessage();
}
