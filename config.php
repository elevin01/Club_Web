<?php
$host = "LOCALHOST";
$db_username = "lime";
$db_password = "password";
$db_name = "SCHOOL";
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
