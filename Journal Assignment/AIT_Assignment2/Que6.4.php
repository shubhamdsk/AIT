<?php
session_start();

// Calculate the total bill
$total = $_SESSION['page1_total'] + $_SESSION['page2_total'] + $_SESSION['page3_total'];

// Clear the session data
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Mall - Bill</title>
</head>
<body>
    <h2>Shopping Mall - Bill</h2>
    <table>
        <tr>
            <th>Page 1 Total:</th>
            <td><?php echo $_SESSION['page1_total']; ?></td>
        </tr>
        <tr>
            <th>Page 2 Total:</th>
            <td><?php echo $_SESSION['page2_total']; ?></td>
        </tr>
        <tr>
            <th>Page 3 Total:</th>
            <td><?php echo $_SESSION['page3_total']; ?></td>
        </tr>
        <tr>
            <th>Total:</th>
            <td><?php echo $total; ?></td>
        </tr>
    </table>
</body>
</html>
