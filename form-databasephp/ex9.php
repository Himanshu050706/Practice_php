<?php
// Demo only: in a real app, get this hash from your database.
$storedHash = password_hash("secret123", PASSWORD_DEFAULT);
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $password = $_POST["password"] ?? "";

    if (password_verify($password, $storedHash)) {
        $message = "Login successful!";
    } else {
        $message = "Incorrect password.";
    }
}
?>

<form method="post">
    Password:
    <input type="password" name="password" required>
    <button type="submit">Log in</button>
</form>

<p><?= htmlspecialchars($message) ?></p>