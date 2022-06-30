<html>
    <head>
    </head>

    <body>
    <?php
    $x = $_REQUEST["txt1"];
    $y = $_REQUEST["txt2"];
    if ($x == "" || $y ==""){
        echo "<h2>Вы не ввели ни одного числа</h2>";
        echo '<meta http-equiv= "refresh" content= "2; url=lab_2.php"/>';
    }
    else {
    $result = $x + $y;
    echo "<p><a href='start.html'>Возврат на стартовую страницу</a></p>";
    echo "<h1>Ваша заявка рассмотрена!</h1>";
    echo "<h3> Результат сложения: $result </h3>";
    }
    ?>
    <a href="lab_2.php"><button>Ввести новые числа</button></a><br>
    </body>
</html>
