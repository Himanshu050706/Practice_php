<form method="post">
    Select Gender:
    <input type="radio" name="option" value="Male"> Male <br>
    <input type="radio" name="option" value="Female"> Female<br>
    <input type="radio" name="option" value="Other"> Other<br>
    
    <button type="submit">Submit</button>
</form>

<?php
$selecte = $_POST['option'] ?? '';
if ($selecte !== '') {
    echo "You selected: " . htmlspecialchars($selecte);
}
?>