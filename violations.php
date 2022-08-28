<?php $pageTitle = "Black Listed Vehicles"?>
<?php include('header.php'); ?>
<?php include('navigation.php'); ?>



<main class="admin-content">
	<?php include('navigation-top-bar.php'); ?>

	<div class="subpage-menu">
		<ul>
			<li>
				<a href="security-roles.php">
				Parking Violations
				</a>
			</li>
			<li>
				<a href="web-users.php" class="active">
				Black Listed Vehicles
				</a>
			</li>
			<li>
				<a href="password-policy.php" >
				Report Violation
				</a>
			</li>
		</ul>
	</div>

	<div class="main-body-content">
		<div class="white-card">
			<div class="float-btn text-right">
				<a href="#addtoblacklist" class="btn btn-secondary btn-w-icon modal-button">Add To Blacklist</a>
			</div>
			<div class="search-filter-row">
				<ul>
					<li>
						<a href="#quick-search" class="active"><i class="fa-solid fa-magnifying-glass"></i> Quick Search</a>
					</li>
				</ul>

				<div class="filter-block" id="quick-search">
					<form>
						<div class="row">
							
							<div class="col">
								<div class="form-group">
									<input type="date" name="" class="form-control" placeholder="Date">
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<input type="text" name="" placeholder="Plate Number" class="form-control">
								</div>
							</div>
							<div class="col-2">
								<div class="form-group">
									<button class="form-control blue-btn">Search</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="reponsive-table">
				<table class="style-table mobile-responsive">
					<thead>
						<tr>
							<th>#NO</th>
							<th>Added On</th>
							<th>Plate No.</th>
							<th>Added By</th>
							<th>Remarks</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-label="#NO">301</td>
							<td data-label="Added On">17-06-2023</td>
							<td data-label="Plate No.">A-123</td>
							<td data-label="Added By">Marry</td>
							<td data-label="Remarks">Dual to speed drive...</td>
							<td>
								<div class="button-group">
									<a href="#" class="btn btn-sqaure btn-red"><i class="fa-solid fa-trash"></i></a>
								</div>
							</td>
						</tr>
						<tr>
							<td data-label="#NO">301</td>
							<td data-label="Added On">17-06-2023</td>
							<td data-label="Plate No.">A-123</td>
							<td data-label="Added By">Marry</td>
							<td data-label="Remarks">Dual to speed drive...</td>
							<td>
								<div class="button-group">
									<a href="#" class="btn btn-sqaure btn-red"><i class="fa-solid fa-trash"></i></a>
								</div>
							</td>
						</tr>
						<tr>
							<td data-label="#NO">301</td>
							<td data-label="Added On">17-06-2023</td>
							<td data-label="Plate No.">A-123</td>
							<td data-label="Added By">Marry</td>
							<td data-label="Remarks">Dual to speed drive...</td>
							<td>
								<div class="button-group">
									<a href="#add-black-list" class="btn btn-sqaure btn-red modal-button"><i class="fa-solid fa-trash"></i></a>
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
<div class="modal-popup" id="addtoblacklist">
	<div class="modal-main-wrap">
		<div class="modal-popup-wrapper">
			<div class="modal-header">
				<h3>Add To Blacklist</h3>
			</div>

			<div class="modal-body">
				<div class="row">
					<div class="col-12">
						<div class="user-detail-form">
							<form action="" method="post" class="form-w-label modal-form">
								<div class="row">
									<div class="col-12">
										<div class="form-group form-group-hr">
											<label for="">Plate No.</label>
											<input type="text" name="" placeholder="" class="form-control">
										</div>
									</div>
									<div class="col-12 form-group-hr">
										<div class="form-group">
											<label for="">First Name</label>
											<input type="text" name="" placeholder="" class="form-control">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<textarea name="" placeholder="" rows="4" class="form-control">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<a href="#" class="btn btn-secondary border-blue">Add To Blacklist</a>
				<a href="#" class="btn btn-outline-blue close-modal-button">Close</a>
			</div>
		</div>
	</div>
</div>


<?php include('footer.php'); ?>


