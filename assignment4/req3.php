<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>requirement3</title>
    <!-- Link to the CSS file based on the selected theme -->
    <link rel="stylesheet" type="text/css" href="titlepage.css">
</head>
<body>
    <div class="container">
        <h1 class="title"> Requirement 3</h1>
        <button id="expandButton2" class="expandButton" onclick="toggleExplanation('explanation2')">Data Backup Strategy</button>
        <div id="explanation2" class="explanation">
            <p>For my CSC 535 coursework, I plan to maintain my project files both locally on my system and on Google Drive for added redundancy and accessibility. 
                This approach ensures that I have local copies for immediate access and backup, 
                while also leveraging cloud storage for remote access and additional backup protection [4]. 
                By synchronizing files between my local system and Google Drive, 
                I can seamlessly work on my coursework from anywhere while ensuring availability[4].</p>
        </div>
        <button id="expandButton3" class="expandButton" onclick="toggleExplanation('explanation3')">Summary</button>
        <div id="explanation3" class="explanation">
            <p>
        In this project, I've utilized PHP scripting [1][3] to enable temperature conversion functionalities [1][3]. 
        The page allows users to input temperature values in a free-form floating point format and select their 
        desired temperature conversion [2] from a dropdown menu. Upon clicking the "Convert" button, the page displays the converted results. 
        Additionally, I've incorporated dynamic theme switching based on the current time, along with the option for ad-hoc theme 
        changes using a toggle button using CSS [2]. The logic for these features has been implemented using PHP[4].
            </p>
    
        </div>
        <button id="expandButton4" class="expandButton" onclick="toggleExplanation('explanation4')">References</button>
        <div id="explanation4" class="explanation">
            <p>[1] "PHP Introduction" https://www.w3schools.com/php/php_intro.asp. (Accessed 23 Feb 2024).</p>    
            <p>[2] "CSS Online Editor." www.w3schools.com/css/css_editor.asp. (Accessed 23 Feb 2024).</p>
            <p>[3] "Online PHP Compiler - oneCompiler." oneCompiler, https://onecompiler.com/php/3xdbqxmvf. (Accessed 23 Feb 2024).</p>
            <p>[4] "OpenAI" https://chat.openai.com/. (Accessed 23 Feb 2024).</p>
           
        </div>
        <div class="link-container">
        <a href="tempConverter.php"> Requirement 2 </a> <br>
        <a href="index.php"> main </a>
     </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
