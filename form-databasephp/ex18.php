<?php
$pdo = new PDO(
    "mysql:host=localhost;dbname=Practice;charset=utf8mb4",
    "root",
    ""
);

$perPage = 3;
$page = max(1, (int)($_GET["page"] ?? 1));
$offset = ($page - 1) * $perPage;

$totalUsers = $pdo->query("SELECT COUNT(*) FROM users")->fetchColumn();
$totalPages = ceil($totalUsers / $perPage);

$statement = $pdo->prepare(
    "SELECT name, email FROM users LIMIT :limit OFFSET :offset"
);
$statement->bindValue(":limit", $perPage, PDO::PARAM_INT);
$statement->bindValue(":offset", $offset, PDO::PARAM_INT);
$statement->execute();

$users = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach ($users as $user): ?>
    <p>
        <?= htmlspecialchars($user["name"]) ?> -
        <?= htmlspecialchars($user["email"]) ?>
    </p>
<?php endforeach; ?>

<?php if ($page > 1): ?>
    <a href="?page=<?= $page - 1 ?>">Previous</a>
<?php endif; ?>

<?php if ($page < $totalPages): ?>
    <a href="?page=<?= $page + 1 ?>">Next</a>
<?php endif; ?>