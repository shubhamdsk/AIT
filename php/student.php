<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$course = $_POST['course'];
$semester = $_POST['semester'];

echo $name . "<br>";
echo $email . "<br>";
echo $phone . "<br>";
echo $dob . "<br>";
echo $gender . "<br>";
echo $course . "<br>";
echo $semester;
$servername = "localhost";
$username = "root";
$password = "";
$database = "php";
$conn = new mysqli($servername, $username, $password, $database);


// Prepare the insert statement
$stmt = $conn->prepare("INSERT INTO student (name, email, phone, dob, gender,course, sem) VALUES ('$name','$email','$phone','$dob','$gender','$course',$semester)");

if ($stmt->execute()) {
    echo "<br>$name's Data Inserted Successfully";
} else {
    echo "Error Occurred During Insertion: " . $stmt->error;
}

$conn->close();
?>
