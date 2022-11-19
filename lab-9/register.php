<!doctype html>
<html>

<head>
    <title>Register</title>
    
</head>

<body>

    <center>
        <h1>Please, registrate</h1>
    </center>
    <p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>
    <center>
        <h2>Registration Form</h2>
    </center>
    <form action="" method="POST">
        <legend>
            <fieldset>

                Username: <input type="text" name="user"><br />
                Password: <input type="password" name="pass"><br />
                <input type="submit" value="Register" name="submit" />

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


            $query = mysqli_query($conn, "SELECT * FROM users WHERE username='" . $user . "'");
            $numrows = mysqli_num_rows($query);
            if ($numrows == 0) {
                $sql = "INSERT INTO users(username,password) VALUES('$user','$pass')";

                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "Account Successfully Created";
                    echo "Welcome!";
                    session_start();
                    $_SESSION['logged'] = true;
                    $_SESSION['username'] = $user;
                    date_default_timezone_set('Asia/Omsk');
                    $_SESSION['time'] = time();
                    
                    header("location: home.php");
                    
                } else {
                    echo "Failure!";
                }
            } else {
                echo "That username already exists! Please try again with another.";
            }
        } else {
            echo "All fields are required!";
        }
    }
    ?>
</body>

</html>