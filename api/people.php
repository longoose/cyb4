<?php
$people = [
    array ("firstName" => "Yuri", "lastName" => "Andrienko", "salery" => 123456),
    array ("firstName" => "Vasia", "lastName" => "Pupkin", "salery" => 1112),
    array ("firstName" => "Andrey", "lastName" => "Andreev", "salery" => 78542),
    array ("firstName" => "Yulia", "lastName" => "Yurkina", "salery" => 22121),
];
$results = [];
$letters = strtolower ($_REQUEST ["letters"]);
foreach ($people as $person){
    if (str_starts_with(strtolower($person ["lastName"]), $letters)){
        array_push($results, $person);
    }
}
echo (json_encode($results));