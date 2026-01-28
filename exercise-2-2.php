

<?php
    $result = null;
    $error  = null;

    if (isset($_POST['operation'])) {

    $num1      = $_POST['num1'];
    $num2      = $_POST['num2'];
    $operation = $_POST['operation'];

    if ($operation == 'add') {
        $result = $num1 + $num2;
    } elseif ($operation == 'subtract') {
        $result = $num1 - $num2;
    } elseif ($operation == 'multiply') {
        $result = $num1 * $num2;
    } elseif ($operation == 'divide') {
        if ($num2 == 0) {
            $error = "Cannot divide by zero";
        } else {
            $result = $num1 / $num2;
        }
    }
    }
?>



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
    <h2> PHP Exercise 2-2</h2>

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

 <?php if ($result !== null): ?>
 <p><strong>Result:</strong> <?php echo $result ?></p>
    <?php endif; ?>

 <?php if ($error): ?>
     <p style="color:red;"> <?php echo $error ?></p>
    <?php endif; ?>
</body>
</html>
