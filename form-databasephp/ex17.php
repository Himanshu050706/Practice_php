<?php
$pdo = new PDO(
    "mysql:host=localhost;dbname=Practice;charset=utf8mb4",
    "root",
    ""
);

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = (int)($_POST["id"] ?? 0);

    $statement = $pdo->prepare("DELETE FROM users WHERE id = :id");
    $statement->execute(["id" => $id]);

    $message = "User deleted.";
}
?>

<form method="post">
    User ID:
    <input type="number" name="id" required>
    <button type="submit">Delete user</button>
</form>

<p><?= htmlspecialchars($message) ?></p>