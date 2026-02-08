<?php
    $total = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['processor'])) {
        foreach ($_POST['processor'] as $price) {
            $total += (int) $price;
        }
    }

    if (isset($_POST['accessories'])) {
        foreach ($_POST['accessories'] as $price) {
            $total += (int) $price;
        }

    }
    if (isset($_POST['ram'])) {
        foreach ($_POST['ram'] as $price) {
            $total += (int) $price;
        }

    }

    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Exercise 2-3</h2>

    <form method="post">


    <strong>Processor</strong> <br>
    <div style="float: left; width: 10%;">
    <input type="checkbox" name="processor[]" value="15000">intel i7 <br>
    <input type="checkbox" name="processor[]" value="13000">intel i5 <br>
    <input type="checkbox" name="processor[]" value="10000">intel i3 <br>
    </div>
    <input type="checkbox" name="processor[]" value="8000">intel Quad Core <br>
    <input type="checkbox" name="processor[]" value="6000">intel Dual Core <br>

<br><br>


    <strong>Ram</strong><br>
<div style="float: left; width: 10%;">
    <input type="checkbox" name="ram[]" value="10000">16 GB<br>
    <input type="checkbox" name="ram[]" value="8000">8 GB <br>

</div>
    <input type="checkbox" name="ram[]" value="4000">4GB<br>
    <input type="checkbox" name="ram[]" value="2000">2GB<br>

    <br><br>

    <strong> Accessories</strong><br>
    <input type="checkbox" name="accessories[]" value="3000">Gaming Keyboard<br>
    <input type="checkbox" name="accessories[]" value="3500">Gaming Mouse <br>
    <input type="checkbox" name="accessories[]" value="2000">Gaming Headset<br>

<input type="submit" value="compute">
<br><br>
  TOTAL:<input type="text" name="total" value="<?php echo '₱' . number_format($total); ?>" readonly>

    </form>


</body>
</html>
