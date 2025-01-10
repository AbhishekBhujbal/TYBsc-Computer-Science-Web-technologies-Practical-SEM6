<?php
session_start();
if (!isset($_SESSION['employee_details']) || !isset($_SESSION['earnings'])) {
    header("Location: employee_details.php");
    exit;
}
$Eno = $_SESSION['employee_details']['Eno'];
$Ename = $_SESSION['employee_details']['Ename'];
$Address = $_SESSION['employee_details']['Address'];
$Basic = $_SESSION['earnings']['Basic'];
$DA = $_SESSION['earnings']['DA'];
$HRA = $_SESSION['earnings']['HRA'];
$Total = $Basic + $DA + $HRA;
?>
<!DOCTYPE html>
<html>

<head>
    <title>Employee Information</title>
</head>

<body>
    <h1>Employee Information</h1>
    <p><strong>Employee Number (Eno):</strong> <?php echo $Eno; ?></p>
    <p><strong>Employee Name (Ename):</strong> <?php echo $Ename; ?></p>
    <p><strong>Address:</strong> <?php echo $Address; ?></p>
    <p><strong>Basic Salary:</strong> <?php echo $Basic; ?></p>
    <p><strong>Dearness Allowance (DA):</strong> <?php echo $DA; ?></p>
    <p><strong>House Rent Allowance (HRA):</strong> <?php echo $HRA; ?></p>
    <p><strong>Total Earnings:</strong> <?php echo $Total; ?></p>
</body>

</html>