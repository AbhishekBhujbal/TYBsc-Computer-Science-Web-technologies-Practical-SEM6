<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 setcookie("font_style", $_POST["font_style"], time() + (86400 * 30), "/");
 setcookie("font_size", $_POST["font_size"], time() + (86400 * 30), "/");
 setcookie("font_color", $_POST["font_color"], time() + (86400 * 30), "/");
 setcookie("background_color", $_POST["background_color"], time() + (86400 * 30), "/");
 header("Location: display_preferences.php");
 exit;
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Set Preferences</title>
</head>
<body>
 <h1>Set Your Preferences</h1>
 <form method="post" action="preferences_form.php">
 <label for="font_style">Font Style:</label>
 <select name="font_style" id="font_style">
 <option value="Arial">Arial</option>
 <option value="Times New Roman">Times New Roman</option>
 <option value="Courier New">Courier New</option>
 </select><br><br>
 <label for="font_size">Font Size:</label>
 <select name="font_size" id="font_size">
 <option value="12px">12px</option>
 <option value="14px">14px</option>
 <option value="16px">16px</option>
 </select><br><br>
 <label for="font_color">Font Color:</label>
 <input type="color" name="font_color" id="font_color"><br><br>
 <label for="background_color">Background Color:</label>
 <input type="color" name="background_color" id="background_color"><br><br>
 <input type="submit" value="Save Preferences">
 </form>
</body>
</html>
