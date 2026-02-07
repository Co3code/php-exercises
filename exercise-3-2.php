
<?php
    if (isset($_POST['compute'])) {

    $work         = $_POST['work'];
    $emp_status   = $_POST['emp_status'];
    $civil_status = $_POST['civil_status'];

    if ($emp_status == "regular") {
        $rate = 500;
    } elseif ($emp_status == "probationary") {
        $rate = 400;
    } else {
        $rate = 300;
    }

    $gross = $work * $rate;

    if ($civil_status == "single") {
        $tax_rate = 0.12;
    } elseif ($civil_status == "married") {
        $tax_rate = 0.10;
    } else {
        $tax_rate = 0.07;
    }

    $tax       = $gross * $tax_rate;
    $deduction = $tax;
    $net       = $gross - $deduction;

    echo "<hr>";
    echo "<p><strong>Gross Salary:</strong> ₱" . number_format($gross, 2) . "</p>";
    echo "<p><strong>Tax:</strong> " . ($tax_rate * 100) . "%</p>";
    echo "<p><strong>Deduction:</strong> ₱" . number_format($deduction, 2) . "</p>";
    echo "<p><strong>Net Salary:</strong> ₱" . number_format($net, 2) . "</p>";

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Computation</title>
</head>
<body>
    <h2>Exercise-3-2.php</h2>
    <form method="post">
 No. ofDays Worked:<input type="number" name="work" required> <br><br>

 <label>Employee Status:</label>
 <select name="emp_status" required >
    <option value="">Emp Status</option>
    <option value="regular">Regular</option>
    <option value="probationary">Probationary</option>
    <option value="casual">Casual</option>
 </select>
 <br><br>
 <label>Civil Status:</label>
 <select name="civil_status" required >
    <option value="">Civil Status</option>
    <option value="single">Single</option>
    <option value="married">Married</option>
    <option value="widow">Widow</option>
 </select>
 <br><br>
 <input type="submit" value="Compute Salary" name="compute">

    </form>

</body>
</html>
