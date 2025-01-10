<?php
session_start();

// Define the correct username and password
define('CORRECT_USERNAME', 'admin');
define('CORRECT_PASSWORD', 'password123');

// Initialize session variables if not already set
if (!isset($_SESSION['attempts'])) {
    $_SESSION['attempts'] = 0;
    $_SESSION['loggedin'] = false;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Increment the attempt counter
    $_SESSION['attempts'] += 1;

    // Check credentials
    if ($username === CORRECT_USERNAME && $password === CORRECT_PASSWORD) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username; // Save the username in the session
        header('Location: welcome.php');
        exit;
    } else {
        $error_message = 'Invalid username or password. Attempts: ' . $_SESSION['attempts'];
    }

    // Check if attempts exceeded 3
    if ($_SESSION['attempts'] >= 3 && !$_SESSION['loggedin']) {
        $error_message = 'You have exceeded the maximum number of attempts.';
        session_destroy(); // Clear session data
        session_start();   // Start a new session to reset variables
        $_SESSION['attempts'] = 3; // Lock further attempts
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <?php
    if (isset($error_message)) {
        echo '<p style="color: red;">' . htmlspecialchars($error_message) . '</p>';
    }
    ?>
    <form method="post" action="login.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>

</html>
