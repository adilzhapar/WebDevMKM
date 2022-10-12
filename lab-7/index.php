<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
    
</head>

<body>

    <?php
    $row = 9;
    $column = 9;
    $day = 3;
    ?>
    <table>
        <!-- <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
        </tr> -->
        <?php
        for ($i = 1; $i <= $row; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= $column; $j++) {
                if ($i == 1 || $j == 1) {
                    echo "<th style='background-color: yellow'>",
                    $i * $j, "</th>";
                } else {
                    echo "<td>", $i * $j, "</td>";
                }
            }
            echo '</tr>';
        }
        ?>
    </table>

    <?php
    echo $day . PHP_EOL;
    switch ($day) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "<p>It's a workday</p>";
            break;
        case 6:
        case 7:
            echo "<p>It's a weekend</p>";
        default:
            echo "<p>Unknown day</p>";
    }

    $nums = array(1, 2, 3, 5, -1, -3);
    $size = count($nums);
    $isPositive = true;
    for ($i = 0; $i < $size; $i++) {
        echo $nums[$i] . PHP_EOL;
    }
    for ($i = 0; $i < $size; $i++) {
        if ($nums[$i] < 0) {
            $isPositive = false;
            echo "<p>Yes</p>";
            break;
        }
    }
    if ($isPositive == true) {
        echo "<p>No</p>";
    }

    ?>

    <!-- <script>countDown(10,"status");</script> -->
    <button id="start">start</button>

    <div id="status"style="font-size:20px;"></div>
    
    
    <h3>Input the number: </h3>
    <form name="form" action="" method="get">
        <input type="text" name="number" id="subject">
    </form>
    

    <?php
        $x = $_GET['number'];
        if($x == "7"){
            echo "You win!";
        }else if($x == ""){
        }else{
            echo "Try again";
            
        }
        
    ?>

    <!-- Comment for teacher: we cannot store values on LocalStore, but after pressing input page is refreshing -->
    <!-- So, I don't know how to make attempts on refreshing page yet, I've added timer with js, but it is also resets on refresh -->
    <script>
        function countDown(secs, elem) {

            var element = document.getElementById(elem);

            element.innerHTML = "Timer: " + secs + " seconds";

            if (secs < 1) {

                clearTimeout(timer);

                element.innerHTML = '<h2>Ended</h2>';

                element.innerHTML += '<a href=" ">Reset</a>';

            }

            secs--;

            var timer = setTimeout('countDown(' + secs + ',"' + elem + '")', 1000);

        }

        let btn = document.getElementById('start');
        btn.addEventListener('click', event => {
            countDown(10, "status");
        })
    </script>
</body>

</html>