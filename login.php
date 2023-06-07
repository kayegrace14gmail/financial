<! DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login</title>

    </head>
    <body>

<?php
// Include the database connection file
require_once "db_connection.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    // Query to check if the username and password match
    $query = "SELECT * FROM admin_table WHERE username = '$enteredUsername' AND password = '$enteredPassword'";
    $result = $conn->query($query);

    // Check if any rows were returned
    if ($result->num_rows > 0) {
        // Username and password are correct, redirect to the dashboard
        header("Location: index1.php");
        exit();
    } else {
        // Username or password is incorrect
        echo "Invalid username or password";
    }
}

// Close the connection
$conn->close();
?>

</body>

</html>
