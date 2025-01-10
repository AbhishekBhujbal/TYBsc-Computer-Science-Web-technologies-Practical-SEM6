<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['employee_details'] = [
        'Eno' => $_POST['Eno'],
        'Ename' => $_POST['Ename'],
        'Address' => $_POST['Address']
    ];
    header("Location: earnings.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Employee Details</title>
</head>

<body>
    <h1>Enter Employee Details</h1>
    <form method="post" action="employee_details.php">
        <label for="Eno">Employee Number (Eno):</label>
        <input type="text" id="Eno" name="Eno" required><br><br>
        <label for="Ename">Employee Name (Ename):</label>
        <input type="text" id="Ename" name="Ename" required><br><br>
        <label for="Address">Address:</label>
        <input type="text" id="Address" name="Address" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>