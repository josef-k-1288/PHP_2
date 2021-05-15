<?php require_once "partials/head.php" ?>
<?php require_once "partials/navbar.php" ?>

<?php $oglasi = getAll(); 
    dd($oglasi);
?>

<div class="conteiner">
    <div class="row">
        <div class="col-10-offset-1">
            <h1 class="display-4 text-center"></h1>
            <div class="row">

            </div>
        </div>
    </div>
</div>
<?php require_once "partials/footer.php" ?>