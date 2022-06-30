<html>
	<head>
		<title>Регистрация</title>
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
		<a href="start.html">Возврат на стартовую страницу</a></br>
		<h2>Пожайлуста, зарегистрируйтесь, введя имя пользователя, адрес электронной почты и пароль.</h2>
		<form method="POST" action="check_registration.php">
			<p><a>Почта:</a><input type="email" name="Email"/></p>
			<p><a>Имя пользователя:</a><input type="text" name="txtUser"/></p>
			<p><a>Пароль:</a><input type="password" name="txtPwd"/></p>
		<!--<a>Укажите, куда вам необходим доступ</a></br>
			<input type="checkbox" name="checkboxKot">Котосайт<checked/></br>
			<input type="checkbox" name="checkboxCalc">Калькулятор<checked/></br>
			<input type="checkbox" name="checkboxLab2">Увеличить ваши числа<checked/></br>
			<input type="checkbox" name="checkboxSchelk">Пощелкать и посчитать<checked/></br>-->
			<button>Регистрация</button></br>
		</form>
	</body>
</html>
