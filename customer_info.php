<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['customer_info'] = [
        'Name' => $_POST['Name'],
        'Addr' => $_POST['Addr'],
        'MobNo' => $_POST['MobNo']
    ];
    header("Location: product_info.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Customer Information</title>
</head>

<body>
    <h1>Enter Customer Information</h1>
    <form method="post" action="customer_info.php">
        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name" required><br><br>
        <label for="Addr">Address:</label>
        <input type="text" id="Addr" name="Addr" required><br><br>
        <label for="MobNo">Mobile Number:</label>
        <input type="text" id="MobNo" name="MobNo" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>