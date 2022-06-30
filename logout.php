<?php
session_start();
unset($_SESSION["user"]);
echo '<meta http-equiv= "refresh" content= "3; url=start.html"/>';
die("Вы успешно вышли из системы и будете перенаправлены на стартовую страницу.");