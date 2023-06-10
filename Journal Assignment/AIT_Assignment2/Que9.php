<?php
// Check if the form is submitted
session_start();

$host = "localhost";
$username = "root";
$password = "";
$database = "php";

$conn = mysqli_connect($host, $username, $password, $database);


$stud_id = $_POST["stud_id"];
$stud_name = $_POST["stud_name"];
$stud_contact = $_POST["stud_contact"];
$stud_email = $_POST["stud_email"];
$stud_dob = $_POST["stud_dob"];
$gender = $_POST["gender"];
$username = $_POST["username"];
$password = $_POST["password"];


$sql = "INSERT INTO students (stud_id, stud_name, stud_contact, stud_email, stud_dob, gender, username, password)
          VALUES ('$stud_id', '$stud_name', '$stud_contact', '$stud_email', '$stud_dob', '$gender', '$username', '$password')";

if (mysqli_query($conn, $sql)) {
    print("Data Inserted Successfully");
} else {
    print("Error in Inserting the data");
}
echo "Student ID: " . $stud_id . "<br>";
echo "Student Name: " . $stud_name . "<br>";
echo "Contact Number: " . $stud_contact . "<br>";
echo "Email ID: " . $stud_email . "<br>";
echo "Date of Birth: " . $stud_dob . "<br>";
echo "Gender: " . $gender . "<br>";
echo "Username: " . $username . "<br>";
echo "Password: " . $password . "<br>";
?>