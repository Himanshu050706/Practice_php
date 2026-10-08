
<form method="post">
    Select Fruit:
    <select name="option">
        <option value="Apple">Apple</option>
        <option value="Banana">Banana</option>
        <option value="Orange">Orange</option>
    </select><br>

    <button type="submit">Submit</button>
</form>

<?php
$selecte = $_POST['option'] ?? '';
if ($selecte !== '') {
    echo "You selected: " . htmlspecialchars($selecte);
}
?>