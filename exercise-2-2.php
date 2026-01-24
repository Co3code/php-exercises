<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Exercises</title>
</head>
<style>

    .button-row{
        margin-top:15px;
        display: flex;
        gap: 10px;
    }
    button{
        padding: 8px 16px;
        cursor: pointer;
    }
</style>
<body>
    <h2> PHP Exercise 2.2</h2>

    <form action="" method="post">
        <label>Num 1:</label>
        <input type="number" name="num1" required>
        <br><br>

        <label>Num 2:</label>
        <input type="number" name="num2" required>


        <div class="button-row">
        <button type="submit" name="operation" value="add">Add</button>
        <button type="submit" name="operation" value="subtract">Subtract</button>
        <button type="submit" name="operation" value="multiply">Multiply</button>
        <button type="submit" name="operation" value="divide">Divide</button>
        </div>
    </form>

</body>
</html>

<?php

    if (isset($_POST['operation'])) {
    $num1      = $_POST['num1'];
    $num2      = $_POST['num2'];
    $operation = $_POST['operation'];
    $result    = 0;
    if ($operation == 'add') {
        $result = $num1 + $num2;
    } else if ($operation == 'subtract') {
        $result = $num1 - $num2;
    } else if ($operation == 'multiply') {
        $result = $num1 * $num2;
    } else if ($operation == 'divide') {

        if ($num2 == 0) {
            echo " <h3> Connot divide by zero</h3>";
            return;
        }
        $result = $num1 / $num2;

    }
    echo "<h3>Result: $result</h3>";
    }
?>
