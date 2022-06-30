<html>
	<head>
		<title>Demo PHP</title>
		<meta charset="utf8" />
	</head>
	<body>
		<a href="start.html">Возврат на стартовую страницу</a>	
		<h1>Демонстрационная страница, которая удваивает введенное число и показывает время открытия страниц.</h1>
			<?php
				$x = 2;
				$y = 2;
				$z= $x + $y;
				date_default_timezone_set("Europe/Moscow");
				$now = date("H:i:s");
				echo "<h3> Время открытия страницы $now</h3>"
			?>
			<p>Введите здесь число и мы его удвоим</p>
			<form action="doubler.php">
				<input type="text"name="data"/>
				<button>Далее</button>
			</form>
	</body>
	
</html>
