<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clicks</title>
    </head>
    <body>
        <a href="start.html">Возврат на стартовую страницу</a>
        <h1>Считаем щелчки</h1>
            <form>
                <button>Click</button>
            </form>
            <?php
            if (isset($_COOKIE["clicks"]))
                $i = $_COOKIE["clicks"];
            else
                $i = 0;
            $i++;
            echo "<h2>Число щелчков: $i</h2>";
            setcookie("clicks",$i); 
            ?> 
    </body>
</html>