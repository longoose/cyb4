<?php
    $x=$_REQUEST["x"];
    $y=$_REQUEST["y"];
    $z=$x+$y;
    sleep (1); //симуляция задержки
    $server = getenv("cyb4_db_server");
    $login = getenv("сyb4_db_user");
    $pwd = trim (getenv("cyb4_db_pwd"));
    $conn = mysqli_connect ($server,$login,$pwd,"cyb4");
   // date_default_timezone_set("Europe/Moscow");
   // $now_1 = time();
   // $now = date("H:i:s");
    $sql = "INSERT INTO Calcs(Num1,Num2,User,TimeStamp1) Values ($x,$y,'Anonym',CURRENT_TIMESTAMP())";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    echo $z;