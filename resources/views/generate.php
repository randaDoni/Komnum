<!-- File generate.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Generated Forms</title>
</head>
<body>
    <h1>Generated Forms</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num_of_forms = $_POST["num_of_forms"];

        // Membuat banyak form sesuai dengan jumlah yang diminta
        for ($i = 1; $i <= $num_of_forms; $i++) {
            echo "<h2>Form $i</h2>";
            echo "<form>";
            echo "<label for='name_$i'>Name:</label>";
            echo "<input type='text' id='name_$i' name='name_$i'><br>";
            echo "<label for='email_$i'>Email:</label>";
            echo "<input type='email' id='email_$i' name='email_$i'><br>";
            echo "<label for='phone_$i'>Phone:</label>";
            echo "<input type='tel' id='phone_$i' name='phone_$i'><br>";
            echo "</form>";
            echo "<br>";
        }
    }
    ?>
</body>
</html>