<!DOCTYPE html>
<html>
<head>
    <title>Form Generator</title>
</head>
<body>
    <h1>Form Generator</h1>
    <form method="post" action="generate.php">
        <label for="num_of_forms">Jumlah Form: </label>
        <input type="number" id="num_of_forms" name="num_of_forms" min="1" max="10">
        <input type="submit" value="Generate">
    </form>
</body>
</html>
