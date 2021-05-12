<form action="save_name.php" method="post">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="sport" placeholder="sport">
    <button type="submit">Save</button>
</form>
<?php

    foreach($result as $row) { // $result pretvaramo u $row
        echo $row['name']."<hr>"; // iz $row uzimamo 1(id)
    }

    mysqli_close($db);

?>