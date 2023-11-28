<?php
// Удаляет все лишнее и записываем значение в переменную
$login =$_POST['login'];
$password = $_POST['password'];

// проверка на пустые поля
if(empty($login) || empty($password)) {
    echo "Не оставляйте пустые поля!";
    exit();
}

// хеширование пароля
$hash = password_hash($password, PASSWORD_DEFAULT);
// var_dump($hash); 

// подключение к бд
$mysql = new mysqli('localhost', 'root', '', 'Mase');
$mysql->set_charset('utf8');
if($mysql->connect_error){
    die("Ошибка: " . $mysql->connect_error);
    exit();
} else {
    echo "Успешное подключение <br>";
}

// проверка логина на совпадение данных
$proverka = "SELECT count(Log_In) as users FROM Mase WHERE Log_In = '$login'";
$res = $mysql->query($proverka);
// Получение строки результирующей таблицы в виде массива
$row = $res->fetch_row();
$count = $row[0];
// выполнение запроса
if($count) {
    echo "Данный логин уже есть, придумайте другой";
    exit();
} else {
    echo "такого пользователя нет";
}

    $query2 = "INSERT INTO Client (`Log_In`, `Password`) VALUES('$login', '$hash')";
    $result = $mysql->query($query2);
    if($result) {
       echo "Данные успешно добавлены";
    } else{
       echo "Ошибка: ";
    }
// }


$mysql->close();

// переход на страницу с авторизацией
header('Location: ../page/autor.php');

// прекращение выполнения кода
exit();
?>