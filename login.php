<html>
	<head>
		<title>Страница авторизации</title>
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
		<h2>Пожайлуста, пройдите авторизацию, введя свои имя пользователя, и пароль.</h2>
		<form method="POST" action="check_login.php">
			<p><a>Имя пользователя:</a><input type="text" name="txtUser"/></p>
			<p><a>Пароль:</a><input type="password" name="txtPwd"/></p>
			<button>Вперед</button></br>
		</form>
	</body>
</html>
