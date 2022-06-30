<html>
	<head>
		<title>Калькулятор на ui</title>
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
			document.getElementById("txt3").value = "Подождите...";
			x = parseInt(document.getElementById("txt1").value);
			y = parseInt(document.getElementById("txt2").value);
			if (document.getElementById("txt1").value == "" || document.getElementById("txt2").value == ""){
				document.getElementById("txt3").value = "Введите два числа";
			}
			else {
			var url = "api/plus.php?x=" + x + "&y=" + y;
			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);
			xhr.onload = function(){
				z = xhr.responseText;
				document.getElementById("txt3").value = z;
			};
			xhr.send();
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
			var url = "api/minus.php?x=" + x + "&y=" + y;
			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);
			xhr.onload = function(){
				z = xhr.responseText;
				document.getElementById("txt3").value = z;
			};
			xhr.send();
			}
			}

			function del() {
			var x,y,z;
			x = parseInt(document.getElementById("txt1").value);
			y = parseInt(document.getElementById("txt2").value);
			if (document.getElementById("txt1").value == "" || document.getElementById("txt2").value == ""){
				document.getElementById("txt3").value = "Введите два числа";
			}
			else{
			if (document.getElementById("txt2").value == 0 ){
				document.getElementById("txt3").value = "Делить на 0 нельзя";
			}
			else {
				var url = "api/del.php?x=" + x + "&y=" + y;
				var xhr = new XMLHttpRequest();
				xhr.open("GET", url);
				xhr.onload = function(){
					z = xhr.responseText;
					document.getElementById("txt3").value = z;
				};
				xhr.send();
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
			else{
			var url = "api/umn.php?x=" + x + "&y=" + y;
			var xhr = new XMLHttpRequest();
			xhr.open("GET", url);
			xhr.onload = function(){
				z = xhr.responseText;
				document.getElementById("txt3").value = z;
			};
			xhr.send();
			}
		}
		</script>
	</head>
	
	<body>
		<a href="start.html">Возврат на стартовую страницу</a>
		<h1>Введите числа</h1>
		<p><input type="text" id="txt1" autocomplete="off"/><a> и </a><input type="text" id="txt2" autocomplete="off"/></p>
		<h3>Выберите нужное действие</h3>
		<button onclick="plus()">+</button></br>
		<button onclick="minus()">-</button></br>
		<button onclick="del()">/</button></br>
		<button onclick="umn()">*</button></br>
		<h3>Результат:</h3>
		<input type="text" id="txt3" readonly="true"/></br>
		<p>Поле для Ваших заметок</p>
		<textarea></textarea>
	</body>
</html>
