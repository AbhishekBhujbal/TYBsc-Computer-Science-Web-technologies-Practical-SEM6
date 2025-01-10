<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}

// Get the username from the session
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>
</head>

<body>
    <h1>Welcome</h1>
    <p>Welcome to the secure area, <?php echo htmlspecialchars($username); ?>!</p>
</body>

</html>



