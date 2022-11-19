<?php
session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
} else {
    $_SESSION['count']++;
}

if ($_SESSION['count'] == 0) {
    echo "You have not restarted the page\n";
} else {
    echo "You have restarted " . $_SESSION['count'] . " times.\n";
}

?>

<div class="" style="margin: 10px;"></div>

<form action="" method="post">
    <input type="text" name="NS">
    <select name="country">
        <option value="">(Select a country)</option>
        <option>Kazakhstan</option>
        <option>Usa</option>
        <option>Ukraine</option>
        <option>Japan</option>
        <option>Italy</option>
    </select>
    <input type="submit" name="Submit">
</form>

<?php
    if (isset($_POST['Submit'])) {
        $_SESSION['name'] = $_POST['NS'];
        $_SESSION['cntry'] = $_POST['country'];
    }
?> 



<div class="" style="margin: 10px;"></div>


<form action="" method="post">
    <input type="text" name="email" placeholder="email">
    <input type="submit" name="Submit2">
</form>

<?php
    if (isset($_POST['Submit2'])) {
        $_SESSION['email'] = $_POST['email'];
    }
?> 

<a href="test.php">test</a>
    

