<?php
    session_start();
    echo $_SESSION['name'] . "<br>";
    echo $_SESSION['cntry'] . "<br>";

    echo '<form action="" type="post">';
    echo '<input type="text" value="' . $_SESSION['email'] . '">';

?>

    <input type="text" name="text" placeholder="name">
    <input type="text" name="text" placeholder="password">
    <input type="submit" name="Submit">
</form>

