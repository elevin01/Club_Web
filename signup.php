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
    <title>Signup to College Club</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body, html, form, input {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }
        
        body {
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/8/8e/Association_for_Computing_Machinery_%28ACM%29_logo.svg');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100vh;
            color: #fff;
        }

        form {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 12px;
            font-size: 18px;
        }

        label, input {
            width: 100%;
            display: block;
            margin: 15px 0;
        }

        h1 {
            text-align: center;
            font-weight: 700;
            font-size: 3rem;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.3);
        }

        input[type="submit"] {
        background-color: #007BFF; /* Blue color */
        color: #fff; 
        border: none;
        border-radius: 8px;
        padding: 15px 20px; 
        cursor: pointer; 
        transition: background-color 0.3s; 
        }

    input[type="submit"]:hover {
    background-color: #0056b3; /* Darker blue on hover */
    }

    input[type="text"], input[type="email"] {
    width: 80%; 
    margin-right: 10%;
    padding: 10px 15px;
    border-radius: 5px;
    border: 1px solid #aaa;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s, transform 0.3s; /* Smooth transition for shadow and scale */
    }

    input[type="text"]:focus, input[type="email"]:focus {
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    transform: scale(1.01); 
    outline: none; 
    border-color: #007BFF; 
    }
#emailError {
    color: red;
    display: none; 
    margin-top: 10px;
    padding: 8px;
    background-color: rgba(255,0,0,0.2); 
    border-radius: 4px;
    border: 1px solid red;
    width: 80%;
    margin-right: 10%;
    text-align: center;
}
 </style>
</head>
<body>

<h1>MC ACM Signup</h1>

<form action="signup.php" method="post" onsubmit="return validateEmail();">
    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="firstName" required>

    <label for="lastName">Last Name:</label>
    <input type="text" id="lastName" name="lastName" required>

    <label for="email">Manhattan College Email:</label>
    <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@manhattan\.edu" required>
    <span id="emailError">Email should end with @manhattan.edu</span>

    <input type="submit" value="Signup" style="width: 50%; margin-left: 25%; margin-right: 25%;">

</form>

<script>
  document.getElementById("email").addEventListener("input", function() {
    validateEmail();
});

function validateEmail() {
    var email = document.getElementById("email").value;
    var emailError = document.getElementById("emailError");
    
    if (!email.endsWith("@manhattan.edu")) {
        emailError.style.display = "block";
    } else {
        emailError.style.display = "none";
    }
}


</script>

</body>
</html>

