<?php
    if (isset($_POST['fahrenheit'])) {
    $fahrenheit = $_POST['fahrenheit'];
    $celsius    = ($fahrenheit - 32) * 5 / 9;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>

<h2>Exercise</h2>

<form method="post">
    Fahrenheit:
    <input type="number" name="fahrenheit" step="any" required>

    =

    Celsius:
    <input type="text" value="<?php echo isset($celsius) ? $celsius : ''; ?>" readonly>

    <br><br>

    <button type="submit">Convert</button>
</form>


</body>
</html>
