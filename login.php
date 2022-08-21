<?php include('header.php'); ?>


<section class="full-height login-section">
	<div class="login-background">
		<img src="assets/images/login/login-bg.jpg">
	</div>

	<div class="login-form">
		<div class="login-row">
			<div class="form-header">
				<img src="assets/images/login/logo.jpg" alt="logo" title="Smartbays Parking Solution" />
			</div>
			<div class="form-body">
				<form>
					<div class="form-group">
						<label for="email">Email</label>
					  	<input type="email" class="form-control" id="email" placeholder="name@example.com" required>
					</div>

					<div class="form-group">
						<label for="password">Password</label>
					  	<div class="pos-rel">
					  		<input type="password" class="form-control" id="password" placeholder="*********" required>
					  		<a href="forgot-password.php" class="forgot-pass">Forgot Password?</a>
					  	</div>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>