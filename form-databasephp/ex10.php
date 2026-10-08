<?php
$name = "";
$email = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");

    if ($name === "" || $email === "") {
        $error = "Please fill in both fields.";
    } else {
        echo "Form submitted successfully!";
    }
}
?>

<form method="post">
    Name:
    <input type="text" name="name" value="<?= htmlspecialchars($name) ?>">
    <br>

    Email:
    <input type="email" name="email" value="<?= htmlspecialchars($email) ?>">
    <br>

    <button type="submit">Submit</button>
</form>

<p><?= htmlspecialchars($error) ?></p>