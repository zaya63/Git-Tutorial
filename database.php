<?php
$servername = "localhost";  // Change this to your database server name
$username = "username";     // Change this to your database username
$password = "password";     // Change this to your database password

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>