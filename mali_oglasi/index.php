


<?php require_once "partials/head.php" ?>
<?php // mora da se nalazi ispod heada zato sto je tu require ka funkcijama u kojoj je session start
    if(isset($_SESSION['id'])){ // ako je korisnik logovan odi na oglasi.php
        header("Location: oglasi.php");
    }

?>

<?php require_once "partials/navbar.php" ?>
<?php require_once "partials/footer.php" ?>
    
