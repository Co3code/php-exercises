<?php
    if (isset($_POST['celsius'])) {
    $celsius    = $_POST['celsius'];
    $fahrenheit = ($celsius * 9 / 5) + 32;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>

<h2>Exercise 2-3</h2>

<form method="post">
    Celsius:
    <input type="number" name="celsius" step="any" required>

    =

    Fahrenheit:
    <input type="text" value="<?php echo isset($fahrenheit) ? $fahrenheit : ''; ?>" readonly>

    <br><br>

    <button type="submit">Convert</button>
</form>


</body>
</html>
