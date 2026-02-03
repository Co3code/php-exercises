

<?php
    if (isset($_POST['calculate'])) {
    $num1      = $_POST['num1'];
    $num2      = $_POST['num2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;

        case 'sub':
            $result = $num1 - $num2;
            break;

        case 'mul':
            $result = $num1 * $num2;
            break;
        case 'div':
            $result = ($num2 != 0) ? $num1 / $num2 : "connot divide it by zero";
            break;
    }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Arithmetic Operations</title>
</head>
<body>
    <h2>Exercise 2-9</h2>

    <form action="" method="post"><br>

     Num1:<input type="number" name="num1" required><br><br>
     Num2:<input type="number" name="num2" required><br><br>

     Select Math Operation <br>

     <input type="radio" name="operation" value="add" required>Addition <br>
     <input type="radio" name="operation" value="sub" required>Subtraction <br>
     <input type="radio" name="operation" value="mul" required>Multiplication<br>
     <input type="radio" name="operation" value="div" required>Division <br>

     <input type="submit" name="calculate" value="Calulate">


  </form>


  <strong>Selected operation:</strong>
   <?php echo isset($operation) ? $operation : ""; ?><br>

  <strong>Result:</strong>
  <?php echo isset($result) ? $result : ""; ?>


</body>
</html>
