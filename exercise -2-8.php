<?php

    if (isset($_POST['calculate'])) {

    $prelim  = $_POST['prelim'];
    $midterm = $_POST['midterm'];
    $endterm = $_POST['endterm'];

    $finalGrade = ($prelim * 0.20) + ($midterm * 0.30) + ($endterm * 0.50);

    if ($finalGrade >= 97) {
        $equivalent = "1.00";   
        $remark = "Excellent ";
    } elseif ($finalGrade >= 94) {
        $equivalent = "1.25";
        $remark = "Superior";

    } elseif ($finalGrade >= 91) {
         $equivalent = "1.50";
        $remark = "Very Good";
    } elseif ($finalGrade >= 88) {
         $equivalent = "1.75";
        $remark = "Good";
    } elseif ($finalGrade >= 85) {
         $equivalent = "2.00";
        $remark = "Satisfactory";
    } 
    elseif ($finalGrade >= 75) {
         $equivalent = "3.00";
        $remark = "Passed";
    } else{
        $equivalent = "5.00";
        $remark = "failed";
    }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
</head>
<body>
    <h2> Exercise 2-8 </h2>
    <form action="" method="post">
    Prelim Grade:<input type="number" name="prelim" required min="0" max="100 " > <br><br>
    Midterm Grade:<input type="number" name="midterm" required  min="0" max="100 " > <br><br>
    Endterm Grade:<input type="number" name="endterm" required   min="0" max="100" > <br><br>

    <input type="submit" name="calculate" value="calculate">
    </form>

        <strong> Average Grade:</strong>
    <?php echo isset($finalGrade) ? number_format($finalGrade, 2) : ''; ?> <br>
    
    <strong>Numerical Equivalent</strong>
    <?php  echo isset($equivalent) ? $equivalent : "";?>
  
    <strong>Remark:</strong>
    <?php echo isset($remark) ? $remark : ""; ?> <br>


</body>
</html>
