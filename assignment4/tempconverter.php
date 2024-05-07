<?php
session_start();

// Function to determine the current theme based on the current time
function getCurrentTheme() {
    $currentHour = date('G');
    return ($currentHour >= 6 && $currentHour < 18) ? 'titlepage' : 'darktheme';
}

// Function to set the theme in the session
function setTheme($theme) {
    $_SESSION['theme'] = $theme;
}

// Check if the theme toggle button is clicked
if (isset($_GET['toggle_theme'])) {
    // If the current theme is 'titlepage', switch to 'darktheme'; otherwise, switch to 'titlepage'
    $currentTheme = ($_SESSION['theme'] === 'titlepage') ? 'darktheme' : 'titlepage';
    setTheme($currentTheme);
} else {
    // If the theme is not set in the session, set the default theme based on the current time
    $currentTheme = isset($_SESSION['theme']) ? $_SESSION['theme'] : getCurrentTheme();
}

// Preserve the current theme value when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $currentTheme = isset($_POST['current_theme']) ? $_POST['current_theme'] : $currentTheme;
    setTheme($currentTheme);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <!-- Link to the CSS file based on the selected theme -->
    <link rel="stylesheet" type="text/css" href="<?php echo $currentTheme; ?>.css">
</head>
<body>
    <div class="container">
        <h1>Temperature Converter</h1>
        <!-- Form to enter temperature and choose conversion type -->
        <form method="post">
            <input type="hidden" name="current_theme" value="<?php echo $currentTheme; ?>">
            <label for="temperature">Enter Temperature:</label>
            <input type="text" id="temperature" name="temperature" required>
            <label for="conversion_type">Choose Conversion Type:</label>
            <select id="conversion_type" name="conversion_type">
                <option value="c_to_f">Celsius to Fahrenheit</option>
                <option value="f_to_c">Fahrenheit to Celsius</option>
            </select>
            <button type="submit" name="convert">Convert</button>
        </form>

        <?php
        // Temperature conversion logic
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['convert'])) {
            $temperature = $_POST['temperature'];
            $conversion_type = $_POST['conversion_type'];

            if ($conversion_type == 'c_to_f') {
                $converted_temperature = ($temperature * 9 / 5) + 32;
                echo "<p>$temperature °C is $converted_temperature °F</p>";
            } elseif ($conversion_type == 'f_to_c') {
                $converted_temperature = ($temperature - 32) * 5 / 9;
                echo "<p>$temperature °F is $converted_temperature °C</p>";
            }
        }
        ?>

<button id="expandButton1" class="expandButton" onclick="toggleExplanation('explanation1')">Explanation for 3 Options</button>
            <div id="explanation1" class="explanation">
            
           
               <p>I have created 3 PHP files: index.php, tempconverter.php, and req3.php, along with two CSS files: titlepage.css and darktheme.css, and one JavaScript file: script.js.</p>
               <p>"index.php" serves as the main title page of the project, while "req3.php" fulfills requirement 3. Both of these PHP files utilize the titlepage.css stylesheet.</p>
               <p>"tempconverter.php" is designed for temperature conversion. It dynamically selects its styling based on the current time or through the toggle theme button option, allowing it to be presented with either titlepage.css or darktheme.css.</p>
               <p>I have implemented PHP code to calculate temperature conversion, initiate a session and dynamically set the theme of the webpage based on the current time. If the time is between 6 am and 6 pm, the theme is set to 'titlepage.css'; otherwise, it is set to 'darktheme.css'.</p>
               <p>Also added additional steps that checks current theme of webpage and set the alternative theme whenever user click on toggle theme button</p>
               <p>One issue is when we click on toggle button it refresh the whole page<p>
           
            </div>
            <div class="link-container">
        <a href="req3.php"> Requirement 3 </a> <br>
        <a href="index.php"> main </a>
     </div>
    </div>
    
    <!-- Form to toggle theme -->
    <form method="get">
        <button class ="custom-button" type="submit" name="toggle_theme">Toggle Theme</button>
    </form>
    <a href= "tempconv.txt"> Source code of current php file</a>
    <script src="script.js"></script>

</body>
</html>
