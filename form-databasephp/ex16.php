<?php
$pdo = new PDO(
    "mysql:host=localhost;dbname=Practice;charset=utf8mb4",
    "root",
    ""
);

$id = (int)($_GET["id"] ?? $_POST["id"] ?? 0);
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");

    $update = $pdo->prepare(
        "UPDATE users SET name = :name, email = :email WHERE id = :id"
    );

    $update->execute([
        "name" => $name,
        "email" => $email,
        "id" => $id
    ]);

    $message = "User updated!";
}

$statement = $pdo->prepare("SELECT name, email FROM users WHERE id = :id");
$statement->execute(["id" => $id]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    die("User not found.");
}
?>

<form method="post">
    <input type="hidden" name="id" value="<?= $id ?>">

    Name:
    <input type="text" name="name"
           value="<?= htmlspecialchars($user["name"]) ?>" required><br>

    Email:
    <input type="email" name="email"
           value="<?= htmlspecialchars($user["email"]) ?>" required><br>

    <button type="submit">Update</button>
</form>

<p><?= htmlspecialchars($message) ?></p>