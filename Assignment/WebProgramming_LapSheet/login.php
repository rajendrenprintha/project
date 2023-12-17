	<?php
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "ATIWEB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Sanitize and validate input to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    

    // Query to check if the user exists in the database
    $sql = "SELECT * FROM lecturer WHERE Email = '$email' AND Password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User found, redirect to a success page or set a session variable
        $_SESSION["loggedin"] = true;
        header("Location: dashboard.php");
        exit();
    } else {
        // User not found, redirect back to the login page with an error message
        header("Location: login.php?error=1");
        exit();
    }
}

// Close the database connection
$conn->close();
?>