<?php
$image = $_POST['image'];
$title = $_POST['title'];
$price = $_POST['price'];

    // подключение к бд
$mysql = new mysqli('localhost', 'root', '', 'Mase');
$mysql->set_charset('utf8');
if($mysql->connect_error){
    die("Ошибка: " . $mysql->connect_error);
}

    $sql = "INSERT INTO Product (Name, Link, Price) VALUES ('$title', '$image', $price);";
    $mysql->query($sql);
    header("Location: ../page/admin.php");
?>