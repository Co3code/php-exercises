<?php
    if (isset($_POST['value'])) {

    $value = (int) $_POST['value'];

    if (isset($_POST['decrament'])) {
        $value--;
    }
    if (isset($_POST['incrament'])) {
        $value++;
    }

    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h2>Exercise 2-7</h2>

    <form action="" method="post">
        <button type="submit" name="decrament">--</button>
        <input type="number" name="value" value="<?php echo $value; ?>" readonly>
        <button type="submit" name="incrament">++</button>


    </form>

</body>
</html>