<!doctype html>
<html>

<head>
    <title>Login</title>
    
</head>

<body>

    <center>
        <h1>Please Login</h1>
    </center>
    <p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>
    <center>
        <h2>Login Form</h2>
    </center>
    <form action="" method="POST">
        <legend>
            <fieldset>

                Username: <input type="text" name="user"><br />
                Password: <input type="password" name="pass"><br />
                <input type="submit" value="Login" name="submit" />

            </fieldset>
        </legend>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        if (!empty($_POST['user']) && !empty($_POST['pass'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $dbhost = "localhost";
            $dbname = "webMKM";
            $dbuser = "adil";
            $dbpass = "jukilo999";
            $dbport = 3306;
            // Создаем соединение
            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport);


            $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$user' AND password='$pass'");
            $numrows = mysqli_num_rows($query);
            if ($numrows == 0) {
                echo "failure!";
            } else {
                echo "Welcome!";
                echo '<a href="logout.php">Logout</a>'; 

            }
        } else {
            echo "All fields are required!";
        }
    }
    ?>
</body>

</html>