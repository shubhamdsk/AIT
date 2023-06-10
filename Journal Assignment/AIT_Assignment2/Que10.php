<?php
// Retrieve form data
$docNo = $_POST['doc_no'];
$docName = $_POST['doc_name'];
$city = $_POST['city'];
$address = $_POST['address'];
$dateOfJoining = $_POST['date_of_joining'];
$areaOfSpecialization = $_POST['area_of_specialization'];


$host = "localhost";
$username = "root";
$password = "";
$database = "php";

$conn = mysqli_connect($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert the record into the database
$sql = "INSERT INTO doctors (doc_no, doc_name, city, address, date_of_joining, area_of_specialization)
        VALUES ('$docNo', '$docName', '$city', '$address', '$dateOfJoining', '$areaOfSpecialization')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully.";
} else {
    echo "Error inserting record: " . $conn->error;
}

$sql = "SELECT * FROM doctors ORDER BY date_of_joining ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display records
    echo "<h2>Sorted Doctor's Records</h2>";
    echo "<table>";
    echo "<tr><th>Doctor Number</th><th>Doctor Name</th><th>City</th><th>Address</th><th>Date of Joining</th><th>Area of Specialization</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["doc_no"] . "</td>";
        echo "<td>" . $row["doc_name"] . "</td>";
        echo "<td>" . $row["city"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["date_of_joining"] . "</td>";
        echo "<td>" . $row["area_of_specialization"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}


$conn->close();
?>