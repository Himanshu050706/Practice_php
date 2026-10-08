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

        $check = $pdo->prepare("SELECT id FROM users WHERE email = :email");
        $check->execute(["email" => $email]);

        if ($check->fetch()) {
            $message = "This email is already registered.";
        } else {
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $insert = $pdo->prepare(
                "INSERT INTO users (name, email, password_hash)
                 VALUES (:name, :email, :password_hash)"
            );

            $insert->execute([
                "name" => $name,
                "email" => $email,
                "password_hash" => $passwordHash
            ]);

            $message = "Registration successful!";
        }
    }
} catch (PDOException $e) {
    $message = "Could not connect to the database.";
}
?>

<form method="post">
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Register</button>
</form>

<p><?= htmlspecialchars($message) ?></p>