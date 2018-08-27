<?php include 'includes/header.php';?>

	<div class="container">
	<div class="row">
	<div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"></div>
	<div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
		<form role="form" method="post" action="" class="text-center">
		<i class="fa fa-lock fa-4x"></i>
		<hr>
		<?php include 'includes/encrypt.php';?>
		<div class="form-group">
		<input type="text" name="password" placeholder="Enter Text To Encrypt" class="form-control">
		</div>

			<button class="btn btn-primary btn-block" name="encrypt" type="submit">Encrypt</button>
			</form>
			</div>
			</div>
			</div>

<?php include 'includes/footer.php';?>