<?php require_once "partials/head.php" ?>
<?php require_once "partials/navbar.php" ?>
<div class="container" style="margin-top: 250px;">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="login.php" method="POST">
                <input type="email" name="email" placeholder="email" class="form-control"><br>
                <input type="password" name="password" placeholder="password" class="form-control"><br>
                <button type="submit" class="form-control btn btn-info">Login</button>
            </form>
        </div>
    </div>
</div>
<?php require_once "partials/footer.php" ?>