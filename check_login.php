<?php
    session_start();
    $user = $_REQUEST["txtUser"];
    $pwd_ = $_REQUEST["txtPwd"];
    $hash = hash("sha256", $pwd_);

$server = getenv("cyb4_db_server");
$login = getenv("сyb4_db_user");
$pwd = trim (getenv("cyb4_db_pwd"));
$conn = mysqli_connect ($server,$login,$pwd,"cyb4");

$sql = "SELECT * FROM users WHERE Login='$user' AND PwdHash='$hash'";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query);
$numRows = count ($result);

if ($numRows == 0) {
    echo "<h1>Извините, неверный логин и пароль!</h1>";
    echo "<h3>Вы будете перенаправлены на страницу авторизации.</h3>";
    echo '<meta http-equiv= "refresh" content= "3; url=login.php"/>';
    }
else {
    echo "<h1>Вы успешно прошли авторизацию и будете перенаправлены на стартовую страницу!</h1>";
    echo "<h2>Привет, $user!</h2>";
   //echo "<h2>Ваш пароль, $pwd_</h2>";
    $_SESSION["user"] = $user;
    echo '<meta http-equiv= "refresh" content= "3; url=start.html"/>';
}
mysqli_close($conn);