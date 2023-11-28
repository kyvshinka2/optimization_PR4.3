<?php
    $id = $_POST['product_id'];
    $price = $_POST['price'];
    if(isset($_POST['remove']))
    {
        require("connection.php");
        $sql = "DELETE FROM Product WHERE ID = $id;";
        $mysql->query($sql);
        header("Location: ../page/admin.php");
    }
    if(isset($_POST['change']))
    {
        require("connection.php");
        $sql = "UPDATE Product SET Price = $price WHERE ID = $id;";
        $mysql->query($sql);
        header("Location: ../page/admin.php");
    }
?>