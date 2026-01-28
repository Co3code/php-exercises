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
    <title>Increment / Decrement Counter</title>
</head>
<style>

    body{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-family: Arial;
    }
    form{

        display: flex;
        gap: 10px;
    }
 


</style>
<body>
    <h2 class="tittle">Exercise 2-7</h2>

    <form action="" method="post">
        <button type="submit" name="decrament">--</button>
        <input type="text" name="value" value="<?php echo $value; ?>" readonly>
        <button type="submit" name="incrament">++</button>


    </form>

</body>
</html>