<?php
$nums = [1,2,3,44,7,6,5];
// echo $nums[0];
//$summa = 0;
//foreach($nums as $x){
    // $summa = $summa + $x;
  //  $summa += $x;
  //  echo "$x</br>";
//}
//echo ($summa);

//вывести только те числа, которые больше 6
foreach ($nums as $x){
    if ($x > 6){
        echo "$x</br>";
    }
}
//$people = ["Yuri","Vasya","Ylia"];
//вывести всех, чье имя начинается на Y
//foreach ($people as $name){
//    if (str_starts_with($name, "Y"))
//        echo "$name</br>";
//}
//$people = [
//["Yuri","Andrienko",123456],
//["Vasya","Pupkin",123],
//["Yulia","Ylkina",333]
//];
//foreach ($people as $person){
//    $firstName = $person[0];
//    $lastname = $person[1];
//    $sellary = $person[2];
//    echo "$firstName $lastname has salery $sellary</br>";
//}
$people = [
    array ("firstName" => "Yuri", "lastName" => "Andrienko", "salery" => 123456),
    array ("firstName" => "Vasia", "lastName" => "Pupkin", "salery" => 1112),
    array ("firstName" => "Yulia", "lastName" => "Yurkina", "salery" => 22121),
];
//foreach ($people as $person){
 //   $firstName = $person["firstName"];
  //  $lastname = $person["lastName"];
   // $sellary = $person["salery"];
    //echo "$firstName $lastname has salery $sellary</br>";
//}
echo(json_encode($people));
