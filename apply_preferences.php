<!DOCTYPE html>
<html>
<head>
 <title>Apply Preferences</title>
 <style>
 body {
 font-family: <?php echo $_COOKIE["font_style"]; ?>;
 font-size: <?php echo $_COOKIE["font_size"]; ?>;
 color: <?php echo $_COOKIE["font_color"]; ?>;
 background-color: <?php echo $_COOKIE["background_color"]; ?>;
 }
 </style>
</head>
<body>
 <h1>Preferences Applied</h1>
 <p>This page displays the web page with your selected preferences.</p>
</body>
</html>