<?php
session_start();
if (!isset($_SESSION['customer_info']) || !isset($_SESSION['product_info'])) {
    header("Location: customer_info.php");
    exit;
}
$Name = $_SESSION['customer_info']['Name'];
$Addr = $_SESSION['customer_info']['Addr'];
$MobNo = $_SESSION['customer_info']['MobNo'];
$ProdName = $_SESSION['product_info']['ProdName'];
$Qty = $_SESSION['product_info']['Qty'];
$Rate = $_SESSION['product_info']['Rate'];
$Total = $Qty * $Rate;
?>
<!DOCTYPE html>
<html>

<head>
    <title>Customer Bill</title>
</head>

<body>
    <h1>Customer Bill</h1>
    <h2>Customer Information</h2>
    <p><strong>Name:</strong> <?php echo $Name; ?></p>
    <p><strong>Address:</strong> <?php echo $Addr; ?></p>
    <p><strong>Mobile Number:</strong> <?php echo $MobNo; ?></p>
    <h2>Product Information</h2>
    <p><strong>Product Name:</strong> <?php echo $ProdName; ?></p>
    <p><strong>Quantity:</strong> <?php echo $Qty; ?></p>
    <p><strong>Rate:</strong> <?php echo $Rate; ?></p>
    <p><strong>Total:</strong> <?php echo $Total; ?></p>
</body>

</html>