<!DOCTYPE html>
<html>
<head>
 <title>Display Preferences</title>
</head>
<body>
 <h1>Your Selected Preferences</h1>
 <p>Font Style: <?php echo $_COOKIE["font_style"]; ?></p>
 <p>Font Size: <?php echo $_COOKIE["font_size"]; ?></p>
 <p>Font Color: <?php echo $_COOKIE["font_color"]; ?></p>
 <p>Background Color: <?php echo $_COOKIE["background_color"]; ?></p>
 <a href="apply_preferences.php">Go to Apply Preferences Page</a>
</body>
</html>