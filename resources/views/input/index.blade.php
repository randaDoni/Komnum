<!DOCTYPE html>
<html>
<head>
    <title>Input Text</title>
</head>
<body>
    <h1>Input Text</h1>
    <form method="post" action="{{ route('input.submit') }}">
        @csrf
        <label for="count">Jumlah Data yang didapatkan:</label>
        <input type="number" name="count" id="count" min="1" max="10">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
