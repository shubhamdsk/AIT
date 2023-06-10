<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store the personal information in session variables
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['birthdate'] = $_POST['birthdate'];
    $_SESSION['mobile'] = $_POST['mobile'];

}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Flight Registration Form - Flight Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="number"],
        input[type="datetime-local"] {
            width: 100%;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #d80e4b;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0d90db;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Flight Registration Form - Flight Details</h1>
        <form method="post" action="Que8B.php">
            <label for="flight_name">Flight Name:</label>
            <input type="text" id="flight_name" name="flight_name" required>

            <label for="source">Source:</label>
            <input type="text" id="source" name="source" required>

            <label for="destination">Destination:</label>
            <input type="text" id="destination" name="destination" required>

            <label for="departure_datetime">Departure Date & Time:</label>
            <input type="datetime-local" id="departure_datetime" name="departure_datetime" required>

            <label for="charges">Charges:</label>
            <input type="number" id="charges" name="charges" required>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>