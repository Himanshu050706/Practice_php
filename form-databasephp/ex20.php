<?php
$pdo = new PDO(
    "mysql:host=localhost;dbname=Practice;charset=utf8mb4",
    "root",
    ""
);

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $action = $_POST["action"] ?? "";

    if ($action === "create") {
        $passwordHash = password_hash($_POST["password"], PASSWORD_DEFAULT);

        $statement = $pdo->prepare(
            "INSERT INTO users (name, email, password_hash)
             VALUES (:name, :email, :password_hash)"
        );
        $statement->execute([
            "name" => trim($_POST["name"]),
            "email" => trim($_POST["email"]),
            "password_hash" => $passwordHash
        ]);

        $message = "User added.";
    }

    if ($action === "update") {
        $statement = $pdo->prepare(
            "UPDATE users SET name = :name, email = :email WHERE id = :id"
        );
        $statement->execute([
            "name" => trim($_POST["name"]),
            "email" => trim($_POST["email"]),
            "id" => (int)$_POST["id"]
        ]);

        $message = "User updated.";
    }

    if ($action === "delete") {
        $statement = $pdo->prepare("DELETE FROM users WHERE id = :id");
        $statement->execute(["id" => (int)$_POST["id"]]);

        $message = "User deleted.";
    }
}

$editUser = null;

if (isset($_GET["edit"])) {
    $statement = $pdo->prepare("SELECT id, name, email FROM users WHERE id = :id");
    $statement->execute(["id" => (int)$_GET["edit"]]);
    $editUser = $statement->fetch(PDO::FETCH_ASSOC);
}

$users = $pdo->query("SELECT id, name, email FROM users")->fetchAll(PDO::FETCH_ASSOC);
?>

<h2><?= $editUser ? "Edit User" : "Add User" ?></h2>

<form method="post">
    <?php if ($editUser): ?>
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="id" value="<?= (int)$editUser["id"] ?>">
    <?php else: ?>
        <input type="hidden" name="action" value="create">
    <?php endif; ?>

    Name:
    <input name="name" required
           value="<?= htmlspecialchars($editUser["name"] ?? "") ?>"><br>

    Email:
    <input type="email" name="email" required
           value="<?= htmlspecialchars($editUser["email"] ?? "") ?>"><br>

    <?php if (!$editUser): ?>
        Password:
        <input type="password" name="password" required><br>
    <?php endif; ?>

    <button type="submit"><?= $editUser ? "Update" : "Add" ?></button>
</form>

<p><?= htmlspecialchars($message) ?></p>

<h2>Users</h2>

<?php foreach ($users as $user): ?>
    <p>
        <?= htmlspecialchars($user["name"]) ?> -
        <?= htmlspecialchars($user["email"]) ?>

        <a href="?edit=<?= (int)$user["id"] ?>">Edit</a>

        <form method="post" style="display:inline">
            <input type="hidden" name="action" value="delete">
            <input type="hidden" name="id" value="<?= (int)$user["id"] ?>">
            <button type="submit">Delete</button>
        </form>
    </p>
<?php endforeach; ?>