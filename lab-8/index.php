
<?php
    $dbhost = "localhost";
    $dbname = "webMKM";
    $dbuser = "adil";
    $dbpass = "jukilo999";
    $dbport = 3306;
    // Создаем соединение
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport);
    // Проверяем соединение
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        echo "Error";
    }
    echo "Connected successfully";
    mysqli_close($conn);
    // phpinfo();
?>
