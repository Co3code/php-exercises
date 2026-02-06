<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Exercise 3-1</h2>
    <form method="post">

<p><strong>Select fruit:</strong></p>

    <div style="float: left; width: 10%;">
    <input type="checkbox" name="fruit[]" value="Apple">Apple <br>
    <input type="checkbox" name="fruit[]" value="Orange">Orangeb <br>
    <input type="checkbox" name="fruit[]" value="Mango">Mango <br>
    <input type="checkbox" name="fruit[]" value="Strawberry">Strawberry <br>
    </div>

    <div style="float: left; width: 10%;">
    <input type="checkbox" name="fruit[]" value="Guava">Guava <br>
    <input type="checkbox" name="fruit[]" value="Cherry">Cherry <br>
    <input type="checkbox" name="fruit[]" value="Grape">Grape <br>
    <input type="checkbox" name="fruit[]" value="Pineapple">Pineapple <br>
    <input type="checkbox" name="fruit[]" value="Water Melon">Water Melon <br>
    </div>
<div style="clear: both;"></div>
<p>
<input type="submit"  name="add" value="Add to list" >
<input type="submit"  name="clear" value="clear" >
</p>







<p>
    <textarea name="list" rows="10" cols="50" style="resize: none;"><?php echo $list; ?></textarea>
</p>
    </form>

</body>
</html>