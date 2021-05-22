<?php require_once "partials/head.php" ?>
<?php require_once "partials/navbar.php" ?>

<?php $oglasi = getAll(); ?>

<div class="conteiner">
    <div class="row">
        <div class="col-10-offset-1">
            <h1 class="display-4 text-center">Svi Oglasi</h1>
            <div class="row">
                <?php foreach($oglasi as $oglas): ?> <!-- Prikazivanje svih oglasa -->
                    <div class="col-4">
                        <div class="card mb-2 mt-2">
                            <div class="card-header">
                                <a href="" class="btn btn-secondary btn-sm">
                                    <?php echo $oglas['category']; ?>
                                </a>
                            </div>
                            <div class="card-body text-center">
                                <h5><?php echo $oglas['title']; ?></h5>
                                <a href="singl.oglas.php?id=<?php echo $oglas['id'] ?>" class="btn btn-light btn-sm">
                                    Vidi oglas
                                </a>
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-warning btn-sm float-left">
                                    <?php echo $oglas['name'];?>
                                </a>
                                <a href="" class="btn btn-danger btn-sm float-right">
                                    <?php echo $oglas['price'];?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php require_once "partials/footer.php" ?>