<?php
	session_start();
	//код авторизации
	if (!isset ($_SESSION["user"])){
		echo '<meta http-equiv= "refresh" content= "3; url=login.php" />';
		die("Требуется логин, вы будете перенаправлены на страницу авторизации");
	}
?>
<html>
	<head>
		<title>Калькулятор на html</title>
		<meta charset="utf8" />
		<style>
			input, button {
			width:150px;
			margin:1px;
			text-align:center;
			}
		</style>
		<script>
			function plus() {
			var x,y,z;
			x = parseInt(document.getElementById("txt1").value);
			y = parseInt(document.getElementById("txt2").value);
			if (document.getElementById("txt1").value == "" || document.getElementById("txt2").value == ""){
				document.getElementById("txt3").value = "Введите два числа";
			}
			else {
				z = x + y;
				document.getElementById("txt3").value = z;
			}
			}

			function minus() {
			var x,y,z;
			x = parseInt(document.getElementById("txt1").value);
			y = parseInt(document.getElementById("txt2").value);
			if (document.getElementById("txt1").value == "" || document.getElementById("txt2").value == ""){
				document.getElementById("txt3").value = "Введите два числа";
			}
			else {
				z = x - y;
				document.getElementById("txt3").value = z;
			}
			}

			function del() {
			var x,y,z;
			x = parseInt(document.getElementById("txt1").value);
			y = parseInt(document.getElementById("txt2").value);
			if (document.getElementById("txt1").value == "" || document.getElementById("txt2").value == ""){
				document.getElementById("txt3").value = "Введите два числа";
			}
			else {
				if (document.getElementById("txt2").value == 0) {
					document.getElementById("txt3").value = "Делить на 0 нельзя";
				}
				else {
					z = x / y;
					document.getElementById("txt3").value = z;
				}
			}
			}

			function umn() {
			var x,y,z;
			x = parseInt(document.getElementById("txt1").value);
			y = parseInt(document.getElementById("txt2").value);
			if (document.getElementById("txt1").value == "" || document.getElementById("txt2").value == ""){
				document.getElementById("txt3").value = "Введите два числа";
			}
			else {
				z = x * y;
				document.getElementById("txt3").value = z;
			}
			}
		</script>
	</head>
	
	<body>
		<a href="start.html">Возврат на стартовую страницу</a>
		<h1>Введите два числа</h1>
		<p><input type="text" id="txt1" autocomplete="off"/><a> и </a><input type="text" id="txt2" autocomplete="off"/></p>
		<h3>Выберите нужное действие</h3>
		<button onclick="plus()">+</button></br>
		<button onclick="minus()">-</button></br>
		<button onclick="del()">/</button></br>
		<button onclick="umn()">*</button></br>
		<h3>Результат:</h3>
		<input type="text" id="txt3" readonly="true"/></br>
	</body>
</html>