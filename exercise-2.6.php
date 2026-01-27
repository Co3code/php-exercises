<?php
    if (isset($_POST['calculate'])) {
    $days = $_POST['Days'];
    $rate = $_POST['rate'];

    $grossSalry = $days * $rate;
    $deduction  = $grossSalry * 0.10;
    $netSalary  = $grossSalry - $deduction;

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Salary Calculator</title>
</head>
<body>
    <h2> PHP Exercise 2.6 </h2>
    <form action="" method="post">

     <label for="">Number of Days Salary:</label><br>
     <input type="text" name="Days"><br><br>

     <label for="">Rate Per Day:</label><br>
     <input type="text" name="rate"><br><br>
     <button type="submit" name="calculate">calculate salary</button>
    </form>

    <strong> GrossSalry</strong>
    <?php echo isset($grossSalry) ? $grossSalry : ''; ?> <br>

    <strong>Dediction</strong>
    <?php echo isset($deduction) ? $deduction : ''; ?><br>

    <strong>Net Salary</strong>
    <?php echo isset($netSalary) ? $netSalary : ''; ?><br>


</body>
</html
