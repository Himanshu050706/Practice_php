<?php
try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=Practice;charset=utf8mb4",
        "root",
        ""
    );

    $statement = $pdo->query("SELECT name, email FROM users");
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not load users.");
}
?>

<?php foreach ($users as $user): ?>
    <p>
        Name: <?= htmlspecialchars($user["name"], ENT_QUOTES, "UTF-8") ?><br>
        Email: <?= htmlspecialchars($user["email"], ENT_QUOTES, "UTF-8") ?>
    </p>
<?php endforeach; ?>