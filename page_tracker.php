<?php
session_start();
if (isset($_SESSION['page_count'])) {
 $_SESSION['page_count'] += 1;
} else {
 $_SESSION['page_count'] = 1;
}

if (isset($_COOKIE['page_count'])) {
 $cookie_count = $_COOKIE['page_count'] + 1;
 setcookie('page_count', $cookie_count, time() + (86400 * 30)); 
} else {
 $cookie_count = 1;
 setcookie('page_count', $cookie_count, time() + (86400 * 30)); 
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Page Access Tracker</title>
</head>
<body>
 <h1>Page Access Tracker</h1>
 <p>This page has been accessed:</p>
 <ul>
 <li><strong>Using Session:</strong> <?php echo $_SESSION['page_count']; ?>
times.</li>
 <li><strong>Using Cookies:</strong> <?php echo $cookie_count; ?> times.</li>
 </ul>
</body>
</html>