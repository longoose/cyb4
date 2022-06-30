<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>People ui</title>
        <script>
            function getPeople (){
                var letters = document.getElementById("letters").value;
                var url = "api/people.php?letters=" + letters;
                var xhr = new XMLHttpRequest();
                xhr.open("GET", url);
                xhr.onload = function (){
                    var text = xhr.responseText;
                    //десерилизация JSON   
                    var people = JSON.parse(text);
                    //из десерилизованного объекта генерируем текст для вывода
                    var out = "";
                    for (var i=0; i < people.length; i++){
                        var person = people[i];
                        var firstName = person["firstName"];
                        var lastName = person["lastName"];
                        out += lastName + "," + firstName + "</br>";
                    };
                    document.getElementById("display").innerHTML = out;
                };
                xhr.send();
            };
        </script>
    </head>
    <body>
        <a href="start.html">Возврат на стартовую страницу</a></br>
        <h1>Поиск сотрудника</h1>
        Введите первые буквы фамилии сотрудника:</br>
        <input type = "text" id = "letters" oninput="getPeople();"/>
        <div id = "display"></div>
    </body>
</html>