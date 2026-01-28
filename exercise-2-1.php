

<?php
    function computeSlope($y2, $y1, $x2, $x1)
    {
    if ($x2 == $x1) {
        return "undefined (vertical line).";
    }
    return ($y2 - $y1) / ($x2 - $x1);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $y2 = floatval($_POST["y2"]);
    $y1 = floatval($_POST["y1"]);
    $x2 = floatval($_POST["x2"]);
    $x1 = floatval($_POST["x1"]);

    $result = computeSlope($y2, $y1, $x2, $x1);
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Slope Calculator</title>
  </head>
  <body>
    <h2>Exercise 2-1</h2>
   <form action="" method="post">
    <label for="y2">enter a value for y2:</label><br>
    <input type="number" step="any" name="y2" required id="y2"><br>

    <label for="y1">enter a value for y1</label><br>
    <input type="number" step="any" name="y1" required><br>
    <label for="x2"> enter a value for x2</label><br>
    <input type="number" step="any" name="x2" required> <br>

    <label for="x1">enyer a value for x1</label><br>
    <input type="number" step="any" name="x1" required><br><br>

    <input type="submit" name="submit" value="submit">

    <?php if (isset($result)): ?>
      <p><strong>Slope: <?php echo htmlspecialchars($result) ?> </strong></p>
      <?php endif; ?>

   </form>
  </body>
</html>

