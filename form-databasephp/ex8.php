<?php
$hashedPassword = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $password = $_POST["password"] ?? "";

    if ($password !== "") {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    }
}
?>

<form method="post">
    Password:
    <input type="password" name="password" required>
    <button type="submit">Hash Password</button>
</form>

<?php
if ($hashedPassword !== "") {
    echo "Hashed password: " . htmlspecialchars($hashedPassword);
}
?>