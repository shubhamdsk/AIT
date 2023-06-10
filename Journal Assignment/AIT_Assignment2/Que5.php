<?php
$name = $_COOKIE['student_name'];
$class = $_COOKIE['student_class'];
$address = $_COOKIE['student_address'];

$java = $_POST['java'];
$php = $_POST['php'];
$st = $_POST['st'];
$it = $_POST['it'];
$practl = $_POST['practl'];
$project = $_POST['project'];

$total = $java + $php + $st + $it;
$average = $total / 4;

print("Name: " . $name) . "<br>";
print("Class: " . $class) . "<br>";
print("Address: " . $address) . "<br>";
print("Mark of Java : " . $java) . "<br>";
print("Mark of Php: " . $php) . "<br>";
print("Mark of St : " . $st) . "<br>";
print("Mark of IT : " . $it) . "<br>";
print("Total Marks : " . $total) . "<br>";
print("Average of Marks : " . $average . "%");
?>