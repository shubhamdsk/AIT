<?php
function calculate($num1, $num2, $operator = 'addition') {
    switch ($operator) {
        case 'addition':
            $result = $num1 + $num2;
            break;
        case 'subtraction':
            $result = $num1 - $num2;
            break;
        case 'multiplication':
            $result = $num1 * $num2;
            break;
        case 'division':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error: Division by zero";
            }
            break;
        default:
            $result = "Invalid operator";
            break;
    }

    return $result;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    $result = calculate($num1, $num2, $operator);
    echo "Result: " . $result;
}
?>
