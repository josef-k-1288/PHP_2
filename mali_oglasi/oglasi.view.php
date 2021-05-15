<?php require_once "partials/head.php" ?>
<?php require_once "partials/navbar.php" ?>

<?php $oglasi = getAll(); ?>

<div class="conteiner">
    <div class="row">
        <div class="col-10-offset-1">
            <h1 class="display-4 text-center">Svi Oglasi</h1>
            <div class="row">
                <?php foreach($oglasi as $oglas): ?>
                    <div class="col-4">
                        <div class="card mb-2 mt-2">
                            <div class="card-header"></div>
                            <div class="card-body"></div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php require_once "partials/footer.php" ?>