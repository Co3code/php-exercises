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
<p>
    <input type="checkbox" name="fruit[]" value="Apple">Apple
    <input type="checkbox" name="fruit[]" value="Orange">Orange
    <input type="checkbox" name="fruit[]" value="Mango">Mango
    <input type="checkbox" name="fruit[]" value="Strawberry">Strawberry
    <input type="checkbox" name="fruit[]" value="Guava">Guava
    <input type="checkbox" name="fruit[]" value="Cherry">Cherry
    <input type="checkbox" name="fruit[]" value="Grape">Grape
    <input type="checkbox" name="fruit[]" value="Pineapple">Pineapple
    <input type="checkbox" name="fruit[]" value="Water Melon">Water Melon
</p>
<p>
<input type="submit"  name="add" value="Add to list" >
<input type="submit"  name="clear" value="clear" >
</p>







<p>
    <textarea name="list" rows="10" cols="50" style="resize: none;"><?= $list; ?></textarea>
</p>
    </form>
    
</body>
</html>