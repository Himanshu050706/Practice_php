<!DOCTYPE HTML>
<html>  
<body>

<form action="ex2.php" method="post">
Email: <input type="email" name="email" required><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"] ?? "");

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Valid email: " . htmlspecialchars($email);
    } else {
        echo "Please enter a valid email address.";
    }
}
?>
</body>
</html>
