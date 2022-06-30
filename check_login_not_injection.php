<?php
session_start();
$user = $_REQUEST["txtUser"];
$pwd_ = $_REQUEST["txtPwd"];
$hash = hash("sha256", $pwd_);

//Устраняем проблему секрета в коде
$server = getenv("cyb4_db_server");
$login = getenv("сyb4_db_user");
$pwd = trim (getenv("cyb4_db_pwd"));
$conn = mysqli_connect ($server,$login,$pwd,"cyb4");
//проблема слабого пароля и превышенного логина делегируется администратору производственного сервера
//Устраняем проблему SQL injection
$sql = "SELECT * FROM users WHERE Login=? AND PwdHash=? ";
$stat = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stat, "ss", $user, $hash);
mysqli_stmt_execute($stat);
$result = mysqli_stmt_get_result($stat);
$numRows = mysqli_num_rows($result);

if ($numRows == 0) {
    echo "<h1>Извините, неверный логин и пароль!</h1>";
    echo "<h3>Вы будете перенаправлены на страницу авторизации.</h3>";
    echo '<meta http-equiv= "refresh" content= "3; url=login_not_injection.php"/>';
    }
else {
    echo "<h1>Вы успешно прошли авторизацию и будете перенаправлены на стартовую страницу!</h1>";
    echo "<h1>Привет, $user!</h1>";
    //echo "<h2>Ваш пароль, $pwd_</h2>";
    $_SESSION["user"] = $user;
    echo '<meta http-equiv= "refresh" content= "3; url=start.html"/>';
}
mysqli_close($conn);