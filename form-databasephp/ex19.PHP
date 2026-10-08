<?php
$pdo = new PDO(
    "mysql:host=localhost;dbname=Practice;charset=utf8mb4",
    "root",
    ""
);

$keyword = trim($_GET["search"] ?? "");
$users = [];

if ($keyword !== "") {
    $sql = "SELECT name, email FROM users
            WHERE name LIKE :keyword OR email LIKE :keyword";
    $statement = $pdo->prepare($sql);
    $statement->execute(["keyword" => "%$keyword%"]);

    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
}
?>

<form method="get">
    <input type="text" name="search"
           value="<?= htmlspecialchars($keyword, ENT_QUOTES, "UTF-8") ?>"
           placeholder="Search name or email">
    <button type="submit">Search</button>
</form>

<?php if ($keyword === "" && isset($_GET["search"])): ?>
    <p>Enter a name or email to search.</p>
<?php endif; ?>

<?php foreach ($users as $user): ?>
    <p>
        <?= htmlspecialchars($user["name"], ENT_QUOTES, "UTF-8") ?> -
        <?= htmlspecialchars($user["email"], ENT_QUOTES, "UTF-8") ?>
    </p>
<?php endforeach; ?>

<?php if ($keyword !== "" && $users === []): ?>
    <p>No matching users found.</p>
<?php endif; ?>