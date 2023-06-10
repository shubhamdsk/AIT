<?php
session_start();

// Initialize the page total for page 2
if (!isset($_SESSION['page2_total'])) {
    $_SESSION['page2_total'] = 0;
}

// Process the purchase on page 2
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $purchase = $_POST['purchase'];
    $price = $_POST['price'];

    // Update the page total
    $_SESSION['page2_total'] += $price;

    // Redirect to the next page
    header('Location: Que6.3.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Mall - Page 2</title>
</head>
<body>
    <h2>Shopping Mall - Page 2</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="purchase">Purchase:</label>
        <input type="text" id="purchase" name="purchase" required><br><br>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required><br><br>

        <input type="submit" value="Add to Cart">
    </form>
</body>
</html>
