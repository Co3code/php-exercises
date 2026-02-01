<?php
    $greet = "";

    if (isset($_POST['submit'])) {
    $language = $_POST['language'];

    if ($language == "English") {
        $greet = "Good Morning";
    } elseif ($language == "Filipino") {
        $greet = "Magandang Umaga";
    } elseif ($language == "Chinese") {
        $greet = "Ni Haw";
    } elseif ($language == "Japanese") {
        $greet = "Kinichi wa";
    } else {
        $greet = "Unkown Language";
    }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Language Selector</title>

</head>
<body>

<form method="post">
    select language:
    <select name="language">
        <option value="English">English</option>
        <option value="Filipino">Filipino</option>
        <option value="Chinese">Chinese</option>
        <option value="Japanese">Japanese</option>
    </select>

    <button type="submit" name="submit" >
        Greet
    </button>
</form>


    <?php if ($greet != ""): ?>
        <p><?php echo $greet ?></p>
    <?php endif; ?>



</body>
</html>
