<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laon Calculator</title>
</head>
<body>
    <h2>Exercise 2-6 </h2>


    <form action="" method="post">

    <label for="">Amount Needed:</label>
    <input type="number" name="amount" required> <br><br>


    <label for="">Interest:</label>
    <input type="number" name="interest" required> <br><br>

    <label for="">Payment Period</label>
    <input type="number" name="months" required><br><br>

    <input type="submit" value="compute" name="compute">
    </form>
    <br>
    <?php
        if (isset($_POST['compute'])) {
            $amount  = $_POST['amount'];
            $interes = $_POST['interest'];
            $months  = $_POST['months'];

            if ($amount > 0 && $interest >= 0 && $months > 0) {
                $totalInterest = $amount * ($interes / 100) * ($months / 12);
                $totalPayable  = $amount + $totalInterest;
                $monthlyPay    = $totalPayable / $months;

                echo " <h3> Result</h3>";
                echo "Loan Amount:" . number_format($amount, 2) . "<br>";
                echo "Total Interest:" . number_format($totalInterest, 2) . "<br>";
                echo "Total Payable:" . number_format($totalPayable, 2) . "<br>";
                echo "Monthyly Payable:" . number_format($monthlyPay, 2) . "<br>";
            } else {
                echo " Please enter valid values ";
            }

        }

    ?>
</body>
</html>
