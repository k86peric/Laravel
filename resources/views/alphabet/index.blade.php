<!DOCTYPE html>
<html>
<head>
    <title>Alphabet Letters</title>
</head>
<body>
    <form method="POST" action="/alphabet-letters">
        @csrf
        <label for="word">Enter a word:</label>
        <input type="text" name="word" id="word">
        <input type="submit" value="Submit">
    </form>
</body>
</html>