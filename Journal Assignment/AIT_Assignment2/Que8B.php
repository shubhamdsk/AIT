<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$database = "php";

$conn = mysqli_connect($host, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_SESSION['name'];
    $address = $_SESSION['address'];
    $birthdate = $_SESSION['birthdate'];
    $mobile = $_SESSION['mobile'];

    $flightName = $_POST['flight_name'];
    $source = $_POST['source'];
    $destination = $_POST['destination'];
    $departureDatetime = $_POST['departure_datetime'];
    $charges = $_POST['charges'];


    $query = "INSERT INTO flights (name, address, birthdate, mobile, flight_name, source, destination, departure_datetime, charges) VALUES ('$name', '$address', '$birthdate', '$mobile', '$flightName', '$source', '$destination', '$departureDatetime', '$charges')";

    if (mysqli_query($conn, $query)) {
        $lastInsertId = mysqli_insert_id($conn); 

        $selectQuery = "SELECT * FROM flights WHERE id = '$lastInsertId'";
        $result = mysqli_query($conn, $selectQuery);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $name = $row['name'];
            $address = $row['address'];
            $birthdate = $row['birthdate'];
            $mobile = $row['mobile'];
            $flightName = $row['flight_name'];
            $source = $row['source'];
            $destination = $row['destination'];
            $departureDatetime = $row['departure_datetime'];
            $charges = $row['charges'];

            echo "<h1>Flight Details</h1>";
            echo "<table >";
            echo "<tr><td><strong>Name:</strong></td><td>$name</td></tr>";
            echo "<tr><td><strong>Address:</strong></td><td>$address</td></tr>";
            echo "<tr><td><strong>Birthdate:</strong></td><td>$birthdate</td></tr>";
            echo "<tr><td><strong>Mobile Number:</strong></td><td>$mobile</td></tr>";
            echo "<tr><td><strong>Flight Name:</strong></td><td>$flightName</td></tr>";
            echo "<tr><td><strong>Source:</strong></td><td>$source</td></tr>";
            echo "<tr><td><strong>Destination:</strong></td><td>$destination</td></tr>";
            echo "<tr><td><strong>Departure Date & Time:</strong></td><td>$departureDatetime</td></tr>";
            echo "<tr><td><strong>Charges:</strong></td><td>$charges</td></tr>";
            echo "</table>";
        } else {
            echo "No flight details found.";
        }
    } else {
        echo "Error inserting flight details: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>