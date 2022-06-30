<html>
	<head>
		<title>Логин</title>
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
	
		<h1>Пожайлуста, введите свои имя пользователя, и пароль.</h1>
		<form method="POST" action="check_login_notinjection.php">
		<!--<p><a>Почта:</a><input type="email" name="Email"/></p>-->
			<p><a>Имя пользователя:</a><input type="text" name="txtUser"/></p>
			<p><a>Пароль:</a><input type="password" name="txtPwd"/></p>
		<!--<a>Укажите, куда вам необходим доступ</a></br>
			<input type="checkbox" name="checkboxKot">Котосайт<checked/></br>
			<input type="checkbox" name="checkboxCalc">Калькулятор<checked/></br>
			<input type="checkbox" name="checkboxLab2">Увеличить ваши числа<checked/></br>
			<input type="checkbox" name="checkboxSchelk">Пощелкать и посчитать<checked/></br>-->
			<button>Вперед</button></br>
		</form>
		<a href="start.html"><button>Возврат на стартовую страницу</button></a>
	</body>
</html>
