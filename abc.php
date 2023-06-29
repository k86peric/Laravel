<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $word = $_POST["word"];

    // Convert word to lowercase for case-insensitive matching
    $word = strtolower($word);

    // Loop through each letter of the alphabet
    foreach (range('a', 'z') as $letter) {
        // Check if the letter exists in the word
        if (strpos($word, $letter) !== false) {
            // If the letter is found, print it in bold
            echo '<strong>' . $letter . '</strong><br>';
        } else {
            // Otherwise, print the letter normally
            echo $letter . '<br>';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Alphabet Letters</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="word">Enter a word:</label>
        <input type="text" name="word" id="word">
        <input type="submit" value="Submit">
    </form>
</body>
</html>