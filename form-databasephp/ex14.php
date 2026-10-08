<?php
$message = "";

try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=Practice;charset=utf8mb4",
        "root",
        ""
    );

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = trim($_POST["name"] ?? "");
        $email = trim($_POST["email"] ?? "");
        $password = $_POST["password"] ?? "";

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $statement = $pdo->prepare(
            "INSERT INTO users (name, email, password_hash)
             VALUES (:name, :email, :password_hash)"
        );

        $statement->execute([
            "name" => $name,
            "email" => $email,
            "password_hash" => $passwordHash
        ]);

        $message = "Registration successful!";
    }
} catch (PDOException $e) {
    $message = "Could not register. Check your database connection.";
}
?>

<form method="post">
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Register</button>
</form>

<p><?= htmlspecialchars($message) ?></p>