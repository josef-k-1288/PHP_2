<?php 

    require "connection.php";

    $name = $_POST['name'];
    $sport = $_POST['sport'];
    $id = $_POST['id']; // iz input hidden polja
    $sql = "UPDATE names SET name='$name', sport='$sport' WHERE id = $id";
    $query = mysqli_query($db,$sql);
    header('Location: index.php');

?>