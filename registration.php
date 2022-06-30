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
			<a>Почта:</a></br>
			<a><input type="email" name="Email"/></a></br>
			<p><a>Имя пользователя:</a></br>
			<a><input type="text" name="txtUser"/></a></br>
			<p><a>Пароль:</a></br>
			<input type="password" name="txtPwd"/></a></br>
			<p><a>Повторите пароль:</a></br>
			<input type="password" name="txtPwd_double"/></p></br>
			<button>Регистрация</button></br>
			<em>Автор: Ткаченко Андрей</em>
		</form>
	</body>
</html>
