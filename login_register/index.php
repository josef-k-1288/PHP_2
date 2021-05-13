<?php session_start(); ?>
<?php require "partials/head.php" ?>
<?php require "partials/navbar.php" ?>
<div class="container">
	<div class="row">
		<div class="col-6 offset-3">
			<?php
			if(isset($_SESSION['id'])){
				echo "<h1>W TO UR APP</h1>";
			}else {
				echo "<h1>NO</h1>";
			}
			?>
		</div>
	</div>
</div>
<?php require "partials/footer.php" ?>
