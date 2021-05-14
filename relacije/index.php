<?php

    require "connection.php";
        $sql = "SELECT humans.first_name, humans.last_name, cards.card_number 
                FROM humans 
                INNER JOIN cards
                ON cards.human_id = humans.id
                WHERE cards.human_id = 2";
        $query = mysqli_query($db,$sql);
        $result = mysqli_fetch_all($query);
        var_dump($result);


?>