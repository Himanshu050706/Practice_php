<!DOCTYPE HTML>
<html>  
<body>

<form action="ex3.php" method="post">
No1: <input type="number" name="no1"  required><br>
No2: <input type="number" name="no2"  required><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $no1 = filter_var($_POST["no1"] ?? null, FILTER_VALIDATE_INT);
    $no2 = filter_var($_POST["no2"] ?? null, FILTER_VALIDATE_INT);

    if ($no1 !== false && $no2 !== false) {
        echo "Sum: " . ($no1 + $no2);
    } else {
        echo "Please enter whole numbers only.";
    }
}
?>
</body>
</html>