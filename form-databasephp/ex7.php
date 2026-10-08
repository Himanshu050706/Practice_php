<?php
$passwordError = "";
$confirmError = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $password = $_POST["password"] ?? "";
    $confirm = $_POST["confirm"] ?? "";

    if (strlen($password) < 8) {
        $passwordError = "Password must be at least 8 characters.";
    }

    if ($password !== $confirm) {
        $confirmError = "Passwords do not match.";
    }

    if ($passwordError === "" && $confirmError === "") {
        echo "Registration successful!";
    }
}
?>

<form method="post">
    Password:
    <input type="password" name="password" required>
    <span><?= htmlspecialchars($passwordError) ?></span>
    <br>

    Confirm password:
    <input type="password" name="confirm" required>
    <span><?= htmlspecialchars($confirmError) ?></span>
    <br>

    <button type="submit">Register</button>
</form>