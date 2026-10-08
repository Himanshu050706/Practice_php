
<!DOCTYPE HTML>
<html>  
<body>

<form action="ex1.php" method="post">
Name: <input type="text" name="name"><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
if (isset($_POST["name"])) {
    echo "Welcome " . $_POST["name"];
}
?>
</body>
</html>
