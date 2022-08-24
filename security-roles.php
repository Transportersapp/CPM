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
									<i class="fa-solid fa-magnifying-glass"></i>
								</div>
							</div>
						</form>
					</div>
					<div class="col-7 text-right">
						<a href="#add-new-role" class="btn btn-secondary modal-button">Add New Roles</a>
					</div>
				</div>
			</div>

			<div class="reponsive-table">
				<table class="style-table mobile-responsive">
					<thead>
						<tr>
							<th>Role Id</th>
							<th>Name</th>
							<th>Created Date</th>
							<th>Created By</th>
							<th>Updated date</th>
							<th>Updated By</th>
							<th>No of User</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-label="Role Id">301</td>
							<td data-label="Name">IT administrator</td>
							<td data-label="Created Date">17-06-2023</td>
							<td data-label="Created By">John</td>
							<td data-label="Updated date">18-06-2023</td>
							<td data-label="Updated By">Simon</td>
							<td data-label="No of User">2</td>
							<td>
								<div class="button-group">
									<a href="#" class="btn btn-sqaure btn-white modal-button"><i class="fa-solid fa-pen"></i></a>
									<a href="#" class="btn btn-sqaure btn-white modal-button"><i class="fa-solid fa-eye"></i></a>
								</div>
							</td>
						</tr>

						<tr>
							<td data-label="Role Id">301</td>
							<td data-label="Name">IT administrator</td>
							<td data-label="Created Date">17-06-2023</td>
							<td data-label="Created By">John</td>
							<td data-label="Updated date">18-06-2023</td>
							<td data-label="Updated By">Simon</td>
							<td data-label="No of User">2</td>
							<td>
								<div class="button-group">
									<a href="#" class="btn btn-sqaure btn-white modal-button"><i class="fa-solid fa-pen"></i></a>
									<a href="#" class="btn btn-sqaure btn-white modal-button"><i class="fa-solid fa-eye"></i></a>
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
<div class="modal-popup" id="add-new-role">
	<div class="modal-main-wrap">
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

				

				
			</form>
		</div>

		<div class="modal-footer">
			<a href="#" class="btn btn-outline-blue close-modal-button">Close</a>
		</div>
	</div>
	</div>
</div>
<?php include('footer.php'); ?>


