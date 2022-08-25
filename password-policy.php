<?php $pageTitle = "User and Roles Management"?>
<?php include('header.php'); ?>
<?php include('navigation.php'); ?>



<main class="admin-content">
	<?php include('navigation-top-bar.php'); ?>

	<div class="subpage-menu">
		<ul>
			<li>
				<a href="security-roles.php">
					Roles
				</a>
			</li>
			<li>
				<a href="web-users.php" >
					Web Users
				</a>
			</li>
			<li>
				<a href="password-policy.php" class="active">
					Password Policy
				</a>
			</li>
		</ul>
	</div>

	<div class="main-body-content">
		<div class="white-card">
			<div class="heading">
				<h2 class="heading-main">Password Policy</h2>
				<p>A password policy is a set of rules design. to increase the security of your 4me account by encouraging users to create and use strong passwords.</p>
				<p>The existing password policy can be modified below. This password policy applies to all people who are register. in this account. Minimum password length 18 </p>
			</div>

			<div class="row">
				<div class="col-12">
					<form>
						<div class="form-group inline-input">
							<label>Minimum password length</label>
							<input type="text" name="" class="form-control grey-input">
							<div class="col-6"></div>
						</div>

						<div class="form-group inline-input">
							<label></label>
							<div class="checkbox-group">
								<div class="checkbox">
									<input type="checkbox" name="">
									<label><span>Require at least one uppercase letter</span></label>
								</div>

								<div class="checkbox">
									<input type="checkbox" name="">
									<label><span>Require at least one lowercase letter</span></label>
								</div>

								<div class="checkbox">
									<input type="checkbox" name="">
									<label><span>Require at least one number</span></label>
								</div>

								<div class="checkbox">
									<input type="checkbox" name="">
									<label><span>Require at least one Symbol Character</span></label>
								</div>
							</div>
							<div class="col-6"></div>
						</div>

						<div class="form-group inline-input">
							<label>Password expires in</label>
							<input type="text" name="" class="form-control grey-input">
							<div class="col-6">Days</div>
						</div>

						<div class="form-group inline-input">
							<label>Enforce password history</label>
							<input type="text" name="" class="form-control grey-input">
							<div class="col-6">passwords remembered</div>
						</div>

						<hr>

						<div class="text-right">
							<button type="submit" class="btn btn-secondary">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</main>

<?php include('footer.php'); ?>


