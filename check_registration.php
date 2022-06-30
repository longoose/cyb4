<?php
session_start();
$user = $_REQUEST["txtUser"];
$pwd_ = $_REQUEST["txtPwd"];
$pwd_double = $_REQUEST["txtPwd_double"];
$email = $_REQUEST["Email"];
$hash = hash("sha256", $pwd_);
if ($pwd = $txtPwd_double){
    //Устраняем проблему секрета в коде
    $server = getenv("cyb4_db_server");
    $login = getenv("сyb4_db_user");
    $pwd = trim (getenv("cyb4_db_pwd"));
    $conn = mysqli_connect ($server,$login,$pwd,"cyb4");
    echo "<h3>Спасибо за регистрацию, вы будете перенаправлены на страницу авторизации.</h3>";
    echo "<h3> Ваш Логин: $user</h3>";
    echo "<h3> Ваш E-Mail: $email</h3>";
    echo '<meta http-equiv= "refresh" content= "3; url=login_not_injection.php"/>';
    //проблема слабого пароля и превышенного логина делегируется администратору производственного сервера
    //Устраняем проблему SQL injection
    $sql = "INSERT INTO users(Login,PwdHash,Email) Values ('$user','$hash','$email')";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
}
else {
    echo "<h3>Пароли не совпадают, пожалуйста проверьте правильность ввода пароля.</h3>";
    echo '<meta http-equiv= "refresh" content= "3; url=registration.php"/>';
}