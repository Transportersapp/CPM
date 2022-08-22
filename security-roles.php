<?php $pageTitle = "User and Roles Management"?>
<?php include('header.php'); ?>
<?php include('navigation.php'); ?>



<main class="admin-content">
	<?php include('navigation-top-bar.php'); ?>

	<div class="subpage-menu">
		<ul>
			<li>
				<a href="#" class="active">
					Roles
				</a>
			</li>
			<li>
				<a href="#" >
					Web Users
				</a>
			</li>
			<li>
				<a href="#" >
					Password Policy
				</a>
			</li>
		</ul>
	</div>

	<div class="main-body-content">
		<div class="white-card">
			
			<div class="search-row-button">
				<div class="row">
					<div class="col-5">
						<form>
							<div class="form-group">
								<div class="pos-rel">
									<input class="form-control grey-input" name="" placeholder="Search Here">
								</div>
							</div>
						</form>
					</div>
					<div class="col-7 text-right">
						<a href="#add-new-role" class="btn btn-secondary modal-button">Add New Roles</a>
					</div>
				</div>
			</div>

			<table class="style-table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Datetime</th>
						<th>User ID</th>
						<th>Username</th>
						<th>Event ID</th>
						<th>Event Type</th>
						<th>Event Desc</th>
						<th>Status</th>
						<th>Error Code</th>
						<th>Error Desc</th>
						<th>Source IP</th>
						<th>Interface</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>01</td>
						<td>11/06/22 <br />11.00AM</td>
						<td>UID20</td>
						<td>Adam</td>
						<td>A1</td>
						<td>1</td>
						<td>Login</td>
						<td>Sucess</td>
						<td>3</td>
						<td>Network Error</td>
						<td>192.168.10.1</td>
						<td>Web</td>
					</tr>
					<tr>
						<td>01</td>
						<td>11/06/22 <br />11.00AM</td>
						<td>UID20</td>
						<td>Adam</td>
						<td>A1</td>
						<td>1</td>
						<td>Login</td>
						<td>Sucess</td>
						<td>3</td>
						<td>Network Error</td>
						<td>192.168.10.1</td>
						<td>Web</td>
					</tr>
					<tr>
						<td>01</td>
						<td>11/06/22 <br />11.00AM</td>
						<td>UID20</td>
						<td>Adam</td>
						<td>A1</td>
						<td>1</td>
						<td>Login</td>
						<td>Sucess</td>
						<td>3</td>
						<td>Network Error</td>
						<td>192.168.10.1</td>
						<td>Web</td>
					</tr>
					<tr>
						<td>01</td>
						<td>11/06/22 <br />11.00AM</td>
						<td>UID20</td>
						<td>Adam</td>
						<td>A1</td>
						<td>1</td>
						<td>Login</td>
						<td>Sucess</td>
						<td>3</td>
						<td>Network Error</td>
						<td>192.168.10.1</td>
						<td>Web</td>
					</tr>
					<tr>
						<td>01</td>
						<td>11/06/22 <br />11.00AM</td>
						<td>UID20</td>
						<td>Adam</td>
						<td>A1</td>
						<td>1</td>
						<td>Login</td>
						<td>Sucess</td>
						<td>3</td>
						<td>Network Error</td>
						<td>192.168.10.1</td>
						<td>Web</td>
					</tr>
				</tbody>
			</table>

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
<div class="modal-popup" id="add-new-role">
	<div class="modal-popup-wrapper big-modal">
		<div class="modal-header">
			<h3>Add New Role</h3>
			<p>User Management</p>
			<a href="#" class="close-modal close-modal-button"></a>
		</div>

		<div class="modal-body">
			<form>
				<div class="row">
					<div class="col-5">
						<div class="form-group inline-input">
							<label>ID</label>
							<input type="text" name="" class="form-control grey-input">
						</div>

						<div class="form-group inline-input">
							<label>Name</label>
							<input type="text" name="" class="form-control grey-input">
						</div>
					</div>
					<div class="col-7">
						<div class="form-group inline-input">
							<textarea placeholder="Remarks" class="form-control grey-input"></textarea>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<table class="style-table remove-background">
						<thead>
							<tr>
								<th>Module Name</th>
								<th>View</th>
								<th>Create</th>
								<th>Edit</th>
								<th>Delete</th>
								<th>Full Control</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="6">
									<table class="border-table">
										<tr>
											<td colspan="6">
												<h3>Users</h3>
											</td>
										</tr>
										<tr>
											<td>Users</td>
											<td>
												<div class="checkbox">
													<input type="checkbox" name="">
													<label>&nbsp;</label>
												</div>
											</td>
											<td>
												<div class="checkbox">
													<input type="checkbox" name="">
													<label>&nbsp;</label>
												</div>
											</td>
											<td>
												<div class="checkbox">
													<input type="checkbox" name="">
													<label>&nbsp;</label>
												</div>
											</td>
											<td>
												<div class="checkbox">
													<input type="checkbox" name="">
													<label>&nbsp;</label>
												</div>
											</td>
											<td>
												<div class="checkbox">
													<input type="checkbox" name="">
													<label>&nbsp;</label>
												</div>
											</td>
										</tr>
									</table>
								</td>
							</tr>

							<tr>
								<td colspan="6">
									<table class="border-table">
										<tr>
											<td colspan="6">
												<h3>Users</h3>
											</td>
										</tr>
										<tr>
											<td>Users</td>
											<td>
												<div class="checkbox">
													<input type="checkbox" name="">
													<label>&nbsp;</label>
												</div>
											</td>
											<td>
												<div class="checkbox">
													<input type="checkbox" name="">
													<label>&nbsp;</label>
												</div>
											</td>
											<td>
												<div class="checkbox">
													<input type="checkbox" name="">
													<label>&nbsp;</label>
												</div>
											</td>
											<td>
												<div class="checkbox">
													<input type="checkbox" name="">
													<label>&nbsp;</label>
												</div>
											</td>
											<td>
												<div class="checkbox">
													<input type="checkbox" name="">
													<label>&nbsp;</label>
												</div>
											</td>
										</tr>
									</table>
								</td>
							</tr>

							<tr>
								<td colspan="6">
									<table class="border-table">
										<tr>
											<td colspan="6">
												<h3>Users</h3>
											</td>
										</tr>
										<tr>
											<td>Users</td>
											<td>
												<div class="checkbox">
													<input type="checkbox" name="">
													<label>&nbsp;</label>
												</div>
											</td>
											<td>
												<div class="checkbox">
													<input type="checkbox" name="">
													<label>&nbsp;</label>
												</div>
											</td>
											<td>
												<div class="checkbox">
													<input type="checkbox" name="">
													<label>&nbsp;</label>
												</div>
											</td>
											<td>
												<div class="checkbox">
													<input type="checkbox" name="">
													<label>&nbsp;</label>
												</div>
											</td>
											<td>
												<div class="checkbox">
													<input type="checkbox" name="">
													<label>&nbsp;</label>
												</div>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<table class="style-table remove-background">
						<thead>
							<tr>
								<th colspan="3">Other Configration</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="radio">
										<input type="radio" name="dashboard" id="dashboard-1" />
										<label for="dashboard-1">Dashboard 1</label>
										
									</div>	
								</td>

								<td>
									<div class="radio">
										<input type="radio" name="dashboard" id="dashboard-2" />
										<label for="dashboard-2">Dashboard 2</label>
									</div>	
								</td>

								<td>
									<div class="radio">
										<input type="radio" name="dashboard" id="dashboard-3"/>
										<label for="dashboard-3">Dashboard 3</label>
										
									</div>	
								</td>
							</tr>
							
						</tbody>
					</table>
					</div>
				</div>
			</form>
		</div>

		<div class="modal-footer">
			<a href="#" class="btn btn-outline-blue close-modal-button">Close</a>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>


