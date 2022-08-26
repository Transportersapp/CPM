<?php $pageTitle = "Users"?>
<?php include('header.php'); ?>
<?php include('navigation.php'); ?>



<main class="admin-content">
	<?php include('navigation-top-bar.php'); ?>

	<div class="main-body-content">
		<div class="white-card">
			<div class="search-row-button">
				<div class="row">
					<div class="col-3">
						<form>
							<div class="form-group">
								<div class="pos-rel">
									<input class="form-control grey-input" name="" placeholder="Search Here">
									<i class="fa-solid fa-magnifying-glass"></i>
								</div>
							</div>
						</form>
					</div>
					<div class="col-9 text-right">
						<a href="#add-new-role" class="btn btn-secondary btn-w-icon modal-button">Add New User</a>
					</div>
				</div>
			</div>

			<div class="reponsive-table">
				<table class="style-table mobile-responsive">
					<thead>
						<tr>
							<th></th>
							<th>Id</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>
							<th>Priority</th>
							<th>Department</th>
							<th>Designation</th>
							<th>Type</th>
							<th>Escalation 1</th>
							<th>Escalation 2</th>
							<th>Status</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-label=""><img class="table-profile-img" src="assets/images/common/profile-pic.jpg" /></td>
							<td data-label="Id">UID1</td>
							<td data-label="First Name">Luther</td>
							<td data-label="Last Name">James</td>
							<td data-label="Email">lj@com</td>
							<td data-label="Priority">1</td>
							<td data-label="Department">Patroleum</td>
							<td data-label="Designation">Manager</td>
							<td data-label="Type">Direct</td>
							<td data-label="Escalation 1">John</td>
							<td data-label="Escalation 2">Nihari</td>
							<td data-label="Status">
								<label class="badge green">Active</label>
							</td>
							<td>
								<div class="button-group">
									<a href="#" class="btn btn-sqaure btn-white modal-button"><i class="fa-solid fa-pen"></i></a>
									<a href="#web-user-request" class="btn btn-sqaure btn-white modal-button"><i class="fa-solid fa-eye"></i></a>
								</div>
							</td>
						</tr>
						<tr>
							<td data-label=""><img class="table-profile-img" src="assets/images/common/profile-pic.jpg" /></td>
							<td data-label="Id">UID2</td>
							<td data-label="First Name">Luther</td>
							<td data-label="Last Name">James</td>
							<td data-label="Email">lj@com</td>
							<td data-label="Priority">1</td>
							<td data-label="Department">Patroleum</td>
							<td data-label="Designation">Manager</td>
							<td data-label="Type">Direct</td>
							<td data-label="Escalation 1">John</td>
							<td data-label="Escalation 2">Nihari</td>
							<td data-label="Status">
								<label class="badge yellow">Inactive</label>
							</td>
							<td>
								<div class="button-group">
									<a href="#" class="btn btn-sqaure btn-white modal-button"><i class="fa-solid fa-pen"></i></a>
									<a href="#web-user-request" class="btn btn-sqaure btn-white modal-button"><i class="fa-solid fa-eye"></i></a>
								</div>
							</td>
						</tr>
						<tr>
							<td data-label=""><img class="table-profile-img" src="assets/images/common/profile-pic.jpg" /></td>
							<td data-label="Id">UID3</td>
							<td data-label="First Name">Luther</td>
							<td data-label="Last Name">James</td>
							<td data-label="Email">lj@com</td>
							<td data-label="Priority">1</td>
							<td data-label="Department">Patroleum</td>
							<td data-label="Designation">Manager</td>
							<td data-label="Type">Direct</td>
							<td data-label="Escalation 1">John</td>
							<td data-label="Escalation 2">Nihari</td>
							<td data-label="Status">
								<label class="badge red">Suspended</label>
							</td>
							<td>
								<div class="button-group">
									<a href="#" class="btn btn-sqaure btn-white modal-button"><i class="fa-solid fa-pen"></i></a>
									<a href="#web-user-request" class="btn btn-sqaure btn-white modal-button"><i class="fa-solid fa-eye"></i></a>
								</div>
							</td>
						</tr>
						
					</tbody>
				</table>
			</div>

			<div class="table-pagination">
				<div class="row">
					<div class="col-6">
						<p class="pagination-count">Showing 10 out of 50</p>
					</div>
					<div class="col-6">
						<ul class="pagination">
							<li><a href="#"><i class="fa-solid fa-angle-left"></i></a></li>
							<li><a href="#"><span>1</span></a></li>
							<li><a href="#"><span>2</span></a></li>
							<li><a href="#"><span>3</span></a></li>
							<li><a href="#"><span>4</span></a></li>
							<li><a href="#"><span>5</span></a></li>
							<li><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>

</main>

<!-- Modal Popup -->
<div class="modal-popup" id="web-user-request">
	<div class="modal-main-wrap">
	<div class="modal-popup-wrapper big-modal">
		<div class="modal-header">
			<h3>Edit User</h3>
			<p>ID #301</p>
			<a href="#" class="close-modal close-modal-button"></a>
		</div>
		<div class="form-tabs">
			<ul>
				<li>
					<a href="security-roles.php" class="active">
						User Info
					</a>
				</li>
				<li>
					<a href="web-users.php">
						Vehicle Info
					</a>
				</li>
			</ul>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col-5">
				<div class="form-group file-upload">
					<input class="form-control" type="file" id="formFileMultiple" multiple>
					<img src="assets/images/common/upload-icon.png" alt="">
					<label for="formFileMultiple" class="form-label">Choose a file Or Drag it here.</label>
				</div>
				</div>
			</div>
			<div class="row">
				<div class="col-3">
					<div class="icon-box">
						<div class="icon-wrap">
							<i class="fa-solid fa-user"></i>
						</div>
						<h3>Username <span>John</span></h3>
					</div>
				</div>

				<div class="col-3">
					<div class="icon-box">
						<div class="icon-wrap">
							<i class="fa-solid fa-heading"></i>
						</div>
						<h3>User ID <span>301</span></h3>
					</div>
				</div>

				<div class="col-3">
					<div class="icon-box">
						<div class="icon-wrap">
							<i class="fa-solid fa-envelope"></i>
						</div>
						<h3>User Email <span>John@email.com</span></h3>
					</div>
				</div>

				<div class="col-3">
					<div class="icon-box">
						<div class="icon-wrap">
							<i class="fa-solid fa-phone"></i>
						</div>
						<h3>User Contact <span>123 4567890</span></h3>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-7">
					<div class="table-details">
						<div>
							<div class="border-title-row flex-1">
								<h2 class="border-title">Request For</h2>
								<h2 class="border-title">Role <label class="badge green">Operator</label></h2>
							</div>
							<div class="dflex">
								<ul>
									<li>Username <span>Jhon</span></li>
									<li>User ID <span>301</span></li>
									<li>User Email <span>john@email.com</span></li>
									<li>Designation <span>Engineer</span></li>
									<li>Start Date <span>22-07-2022</span></li>
								</ul>
								<div class="seperator"></div>
								<ul>
									<li>Company <span>ADNOC HQ</span></li>
									<li>Contact No <span>123 456780</span></li>
									<li>Grade <span>12</span></li>
									<li>Site <span>ADNOC HQ</span></li>
									<li>End Date <span>22-07-2022</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="col-5">
					<div class="table-details">
						<div>
							<div class="border-title-row flex-1">
								<h2 class="border-title">Zone Info</h2>
							</div>

							<div class="big-badge">
								<button class="big-badge-button">Zone 1</button>
								<button class="big-badge-button">Zone 2</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="modal-header border-none">
						<h3>User Responsibility</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et quam volutpat, ultricies elit sit amet, efficitur est. </p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="border-form">
						<form>
							<div class="row">
								<div class="col-3">
									<div class="form-group inline-input">
										<label>Select Status</label>
										<select class="form-control grey-input">
											<option>Select</option>
										</select>
									</div>

									<div class="form-group inline-input">
										<label>Select Role</label>
										<select class="form-control grey-input">
											<option>Select</option>
										</select>
									</div>
								</div>
								<div class="col-7">
									<div class="form-group inline-input">
										<textarea placeholder="Remarks" class="form-control grey-input"></textarea>
									</div>
								</div>
								<div class="col-2">
									<div class="form-group inline-input">
										<button type="submit" class="btn btn-secondary">Submit</button>
									</div>
									<div class="form-group inline-input">
										<button type="button" class="btn btn-outline-blue close-modal-button">Cancel</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>


		</div>
	</div>
	</div>
</div>
<?php include('footer.php'); ?>


