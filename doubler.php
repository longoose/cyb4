<p><a href="start.html">Возврат на стартовую страницу</a></p>	
<?php
$x = $_REQUEST["data"];
if($x == ""){
    echo "<p2>Вы не ввели число, пожалуйста, введите число</p2></br>";
}
else {
$result = 2 * $x;
echo "<p2> Результат удвоения числа $x = $result</p2></br>";
}
?>
<p><a href="demo02.php"><button>Ввести новое число</button></a></p><br>