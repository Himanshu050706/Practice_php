<?php
$name = "";
$email = "";
$nameError = "";
$emailError = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");

    if ($name === "") {
        $nameError = "Name is required.";
    }else{
        echo "You Name: " . htmlspecialchars($name);
    }

    if ($email === "") {
        $emailError = "Email is required.";
    }else{
        echo "You Email: " . htmlspecialchars($email);
    }
}
?>

<form method="post">
    Name:
    <input type="text" name="name" value="<?= htmlspecialchars($name) ?>">
    <span><?= $nameError ?></span>
    <br>

    Email:
    <input type="text" name="email" value="<?= htmlspecialchars($email) ?>">
    <span><?= $emailError ?></span>
    <br>

    <button type="submit">Submit</button>
</form>