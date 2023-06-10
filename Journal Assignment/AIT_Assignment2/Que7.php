<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <table cellpadding="3px" cellspacing="0px" border="1">
        <?php
        for ($i = 1; $i <= 6; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 5; $j++) {
                echo "<td>";
                echo $i . " * " . $j . " = " . ($i * $j);
                echo "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
