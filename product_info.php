<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['product_info'] = [
        'ProdName' => $_POST['ProdName'],
        'Qty' => $_POST['Qty'],
        'Rate' => $_POST['Rate']
    ];
    header("Location: generate_bill.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
head>
<title>Product Information</title>
</head>

<body>
    <h1>Enter Product Information</h1>
    <form method="post" action="product_info.php">
        <label for="ProdName">Product Name:</label>
        <input type="text" id="ProdName" name="ProdName" required><br><br>
        <label for="Qty">Quantity:</label>
        <input type="number" id="Qty" name="Qty" required><br><br>
        <label for="Rate">Rate:</label>
        <input type="number" id="Rate" name="Rate" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>