<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATI Batticaloa - Lecturer Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #3498db;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #dashboard-header {
            background-color: #2980b9;
            padding: 20px;
            width: 100%;
            text-align: center;
        }

        #dashboard-content {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 400px;
            margin-top: 20px;
            padding: 20px;
            text-align: center;
        }

        #logout-btn {
            background-color: #e74c3c;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
        }

        #logout-btn:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <div id="dashboard-header">
        <h2>Welcome to ATI Batticaloa Dashboard</h2>
        <!-- Display the lecturer's email from the session -->
        <p>Email: <!-- PHP code to display lecturer's email --></p>
    </div>
    <div id="dashboard-content">
        <!-- Dashboard content goes here -->
        <p>This is your dashboard. Add your content here.</p>
        <form action="logout.php" method="post">
            <input type="submit" id="logout-btn" value="Logout">
        </form>
    </div>
</body>
</html>
