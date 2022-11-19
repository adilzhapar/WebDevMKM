<?php
    session_start();
    echo $_SESSION['username'] . 'is logged <br>';
    echo "Login time: " . date('d/m/Y h:i:s', $_SESSION['time']) . '<br>';
    echo "Logged " . time() - $_SESSION['time'] . " seconds ago<br>"
?>

<a href="logout.php">Logout</a>