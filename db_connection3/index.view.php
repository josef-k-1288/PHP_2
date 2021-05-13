<form action="save_name.php" method="post">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="sport" placeholder="sport">
    <button type="submit">Save</button>
</form>

<?php foreach($result as $row): ?>
    <?php echo $row['name']; ?> <a href="delete.php?id=<?php echo $row['id']?>">Delete</a><hr>

<?php endforeach?>



<?php
    mysqli_close($db);

?>