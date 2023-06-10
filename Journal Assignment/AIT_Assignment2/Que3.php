<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $operation = $_POST['operation'];

    $elements = array(1, 2, -3, 4, 5, 0);

    print("Original Array : <br>");
    print_r($elements);
    if ($operation === 'pos-neg') {
        echo "<br>Positive/Negative check:<br>";

        foreach ($elements as $element) {
            if ($element > 0) {
                echo "<br>$element is positive.<br>";

            } elseif ($element < 0) {
                echo "<br>$element is negative.<br>";

            } else {
                echo "<br>$element is zero.<br>";
            }
        }
    } elseif ($operation === 'average') {
        $sum = array_sum($elements);
        $count = count($elements);
        $average = $sum / $count;
        print("<br>sum : ".$sum);
        print("<br>Count : ".$count);
        echo "<br>Average of array elements: $average<br>";

    } elseif ($operation === 'sum') {
        $sum = array_sum($elements);
        echo "<br>Sum of array elements: $sum<br>";
    }
}
?>