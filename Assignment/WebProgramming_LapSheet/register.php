<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATI Batticaloa - Front Page</title>
    <style>
        body {
            background-color: #F5F5F5;
            font-family: Arial, sans-serif;
            text-align: center;
        }
		.main {
            padding: 2em 0;
        }
        form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: #FFF;
            cursor: pointer;
        }
        a {
            color: #3498db;
            text-decoration: none;
        }
    </style>
</head>
<body>
	<div class="main">
             <div id="login-header">
            <img src="ATILogo.png" alt="ATI Batticaloa Logo">

            <h2>ATI Batticaloa </h2>
        </div>
    <form action="register.php" method="post">
        <h2>Lecturer Registration</h2>
        <input type="text" name="name" placeholder="Name in full" required>
        <input type="email" name="email" placeholder="Email" required>
        <select name="designation" required>
            <option value="Assistant Lecturer">Assistant Lecturer</option>
            <option value="Lecturer">Lecturer</option>
            <option value="Senior Lecturer I">Senior Lecturer I</option>
            <option value="Senior Lecturer II">Senior Lecturer II</option>
        </select>
        <!-- Populate this dropdown from the Course table in the database -->
        <select name="course" required>
            <option value="HNDA">HNDA</option>
            <option value="HNDIT">HNDIT</option>
            <option value="HNDE">HNDE</option>
            <!-- Add more options based on your Course table -->
        </select>
        <select name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Register">
    </form>

    <p>Already have an account? <a href="FrontPage.php">Login here</a>.</p>
	
	<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ATIWEB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $designation = mysqli_real_escape_string($conn, $_POST["designation"]);
    $course = mysqli_real_escape_string($conn, $_POST["course"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password

    // Insert data into the Lecturer table
    $sql = "INSERT INTO Lecturer (Name, Email, Designation, CourseID, Gender, Password) VALUES ('$name', '$email', '$designation', '$course', '$gender', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Registration successful
        echo "Registration successful";
    } else {
        // Registration failed
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
	
	
	
	
	
</body>
</html>

	



	


