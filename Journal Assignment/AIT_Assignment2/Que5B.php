<?php
session_start();
$name = $_POST['name'];
$class = $_POST['class'];
$address = $_POST['address'];

setcookie('student_name', $name);
setcookie('student_class', $class);
setcookie('student_address', $address);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Student Marks</title>
</head>

<body>
    <h2>Student Marks Form</h2>
    <form method="post" action="Que5.php">
        <label for="java">Java:</label>
        <input type="number" id="java" name="java" required><br><br>

        <label for="php">PHP:</label>
        <input type="number" id="php" name="php" required><br><br>

        <label for="st">ST:</label>
        <input type="number" id="st" name="st" required><br><br>

        <label for="it">IT:</label>
        <input type="number" id="it" name="it" required><br><br>

        <label for="practl">Practical:</label>
        <input type="number" id="practl" name="practl" required><br><br>

        <label for="project">Project:</label>
        <input type="number" id="project" name="project" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>