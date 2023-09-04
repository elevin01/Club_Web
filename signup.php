<?php
include 'config.php';  // to include our database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];

    $conn = getConnection();
    
    $stmt = $conn->prepare("INSERT INTO Users (FirstName, LastName, Email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $firstName, $lastName, $email); 
    
    if ($stmt->execute()) {
        echo "Welcome to the club!";
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACM Manhattan College Sign Up</title>
</head>
<body>

<form action="signup.php" method="post">
    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="firstName" required>

    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name="lastName" required>

    <label for="email">Manhattan College Email:</label>
    <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@manhattan\.edu" required>

    <input type="submit" value="Signup">
</form>

</body>
</html>
