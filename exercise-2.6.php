<?php
if (isset($_POST['calculate'])){
    $days = $_POST['Days'];
    $rate = $_POST['rate'];
    
    $grossSalry  = $days * $rate;
    $deduction = $grossSalry * 0.10;
    $netSalary = $grossSalry - $deduction;

    echo "<h3>Result</h3>";
    echo "Gross Salary:" . $grossSalry . "<br>";
    echo "Deduction:" . $deduction . "<br>";
    echo "Net Salary:" . $netSalary . "<br>";
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

     <input type="text" name="rate"><br>
     <label for="">Rate Per Day:</label><br><br>
     <button type="submit" name="calculate">calculate salary</button>
    </form>
    
    
</body>
</html