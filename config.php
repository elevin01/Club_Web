<?php
$host = "YOUR_HOST";
$db_username = "YOUR_USERNAME";
$db_password = "YOUR_PASSWORD";
$db_name = "YOUR_DATABASE_NAME";
// Imma leave this part to you.

function getConnection() {
    global $host, $db_username, $db_password, $db_name;
    
    $conn = new mysqli($host, $db_username, $db_password, $db_name);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
}
?>
