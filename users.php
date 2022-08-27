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
									<a href="#user-info" class="btn btn-sqaure btn-white modal-button"><i class="fa-solid fa-pen"></i></a>
									<a href="#vehicle-info" class="btn btn-sqaure btn-white modal-button"><i class="fa-solid fa-eye"></i></a>
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
<div class="modal-popup" id="user-info">
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
					<a href="#userinfotab" class="active tab-link">
						User Info
					</a>
				</li>
				<li>
					<a href="#vehicleinfo" class="tab-link">
						Vehicle Info
					</a>
				</li>
			</ul>
		</div>
		
		<div class="modal-body">
			<div class="form-tabs-block" id="userinfotab">
				<div class="row">
					<div class="col-5">
						<div class="form-group file-upload">
							<input class="form-control" type="file" id="formFileMultiple" multiple>
							<img src="assets/images/common/upload-icon.svg" alt="" class="upload-icon">
							<label for="formFileMultiple" class="form-label">Choose a file Or Drag it here.</label>
						</div>
					</div>
					<div class="col-7">
						<div class="user-detail-form">
							<form action="" method="post" class="form-w-label modal-form">
								<div class="row">
									<div class="col-2">
										<div class="form-group">
											<label for="">User ID</label>
											<input type="text" name="" placeholder="" class="form-control">
										</div>
									</div>
									<div class="col-5">
										<div class="form-group">
											<label for="">First Name</label>
											<input type="text" name="" placeholder="" class="form-control">
										</div>
									</div>
									<div class="col-5">
										<div class="form-group">
											<label for="">Last Name</label>
											<input type="text" name="" placeholder="" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label for="">Contact Number</label>
											<input type="text" name="" placeholder="" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label for="">Designation</label>
											<input type="text" name="" placeholder="" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label for="">Department</label>
											<input type="text" name="" placeholder="" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label for="">Company</label>
											<input type="text" name="" placeholder="" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label for="">Site</label>
											<input type="text" name="" placeholder="" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label for="">Priority Level</label>
											<input type="text" name="" placeholder="" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<div class="form-group">
											<label for="">Company</label>
											<input type="text" name="" placeholder="" class="form-control">
										</div>
									</div>
									<div class="col-6">
										<div class="form-group">
											<label for="">Site</label>
											<input type="text" name="" placeholder="" class="form-control">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="form-tabs-block" id="vehicleinfo">
				<div class="row modal-header border-bottom-none mb-0 pb-0">
					<h3>Parking Allocated</h3>
				</div>
				<div class="row table-info table-info-w-icon">
					<div class="col-3"></div>
					<div class="col-9">
						<div class="table-info-col">
							<div>
								<div class="dflex">
									<ul>
										<li>Username <span>Jhon</span></li>
										<li>User ID <span>301</span></li>
										<li>User Email <span>john@email.com</span></li>
										<li>Designation <span>Engineer</span></li>
										<li>Start Date <span>22-07-2022</span></li>
									</ul>
									<div class="seperator-wide"></div>
									<ul>
										<li>Username <span>Jhon</span></li>
										<li>User ID <span>301</span></li>
										<li>User Email <span>john@email.com</span></li>
										<li>Designation <span>Engineer</span></li>
										<li>Start Date <span>22-07-2022</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row modal-header border-bottom-none mb-0 pb-0">
				<h3>Without Valid Parking</h3>
				</div>
					<div class="row table-info table-info-w-icon">
						<div class="col-3"></div>
						<div class="col-9">
							<div class="table-info-col">
								<div>
									<div class="dflex">
										<ul>
											<li>Username <span>Jhon</span></li>
											<li>User ID <span>301</span></li>
											<li>User Email <span>john@email.com</span></li>
											<li>Designation <span>Engineer</span></li>
											<li>Start Date <span>22-07-2022</span></li>
										</ul>
										<div class="seperator-wide"></div>
										<ul>
											<li>Username <span>Jhon</span></li>
											<li>User ID <span>301</span></li>
											<li>User Email <span>john@email.com</span></li>
											<li>Designation <span>Engineer</span></li>
											<li>Start Date <span>22-07-2022</span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>

			</div>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn btn-secondary border-blue">Save</a>
			<a href="#" class="btn btn-outline-blue close-modal-button">Close</a>
		</div>
	</div>
	</div>
</div>

<?php include('footer.php'); ?>


