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
 <select name="emp_status" required >
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
