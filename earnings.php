<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['earnings'] = [
        'Basic' => $_POST['Basic'],
        'DA' => $_POST['DA'],
        'HRA' => $_POST['HRA']
    ];
    header("Location: display_employee.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Employee Earnings</title>
</head>

<body>
    <h1>Enter Employee Earnings</h1>
    <form method="post" action="earnings.php">
        <label for="Basic">Basic Salary:</label>
        <input type="number" id="Basic" name="Basic" required><br><br>
        <label for="DA">Dearness Allowance (DA):</label>
        <input type="number" id="DA" name="DA" required><br><br>
        <label for="HRA">House Rent Allowance (HRA):</label>
        <input type="number" id="HRA" name="HRA" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>