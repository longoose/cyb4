<html>
	<head>
		<title>Калькулятор на чистом РНР</title>
		<meta charset="utf8" />
		<style>
			input, button {
			width:150px;
			margin:1px;
			text-align:center;
			}
		</style>
	</head>
	
	<body>
		<a href="start.html">Возврат на стартовую страницу</a>
		<h1>Введите числа</h1>
        <?php
            if (empty($_REQUEST["txt1"])){
                $x = "";
                $y = "";
                $z = "";
            }
            else {
                if (isset($_REQUEST["txt1"], $_POST ['plus'])){
                    $x = $_REQUEST["txt1"];
                    $y = $_REQUEST["txt2"];
                    $z = $x + $y;
                }
                else {
                    if (isset($_REQUEST["txt1"], $_POST ['minus'])){
                        $x = $_REQUEST["txt1"];
                        $y = $_REQUEST["txt2"];
                        $z = $x - $y;
                    }
                    else {
                        if (isset($_REQUEST["txt1"], $_POST ['del'])){
                            $x = $_REQUEST["txt1"];
                            $y = $_REQUEST["txt2"];
                            if ($y == 0) {
                                $z = ('Делить на 0 нельзя');
                            }
                            else {
                                $z = $x / $y;
                            }
                        }
                        else {
                            if (isset($_REQUEST["txt1"], $_POST ['umn'])){
                                $x = $_REQUEST["txt1"];
                                $y = $_REQUEST["txt2"];
                                $z = $x * $y;
                            }
                            else {
                                $x = "";
                                $y = "";
                                $z = "";
            }   }   }   }   }
        ?>
        <form method="post">
            <p><input type="text" name="txt1" autocomplete="off" value="<?=$x?>"/><a> и </a><input type="text" name="txt2" autocomplete="off" value="<?=$y?>"/></p>    
            <h3>Выберите нужное действие</h3>
            <input type="submit" name="plus" value="+"></input></br>
            <input type="submit" name="minus" value="-"></input></br>
            <input type="submit" name="del" value="/"></input></br>
            <input type="submit" name="umn" value="*"></input></br>
            <h3>Результат:</h3>
            <input type="text" readonly="true" value="<?=$z?>"/></br>
        </form>
        <textarea></textarea>
    </body>
</html>