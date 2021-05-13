<?php 

    require "connection.php";

    $sql = "SELECT * FROM names";

    $query = mysqli_query($db, $sql); // mysql result set ... uzimamo $db i $sql varijablu(odgovor od baze)

    $result = mysqli_fetch_all($query,MYSQLI_ASSOC);  // pretvaramo sve iz $query varijable u array, a MYSQLI_ASSOC pretvara u asocijativni niz tako da posle mozemo da pozivamo bilo sta

    // echo "<pre>";
    // var_dump($result);
    // echo "</pre>";

    require "index.view.php";
?>

