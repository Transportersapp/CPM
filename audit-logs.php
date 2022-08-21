<?php $pageTitle = "Logs"?>
<?php include('header.php'); ?>
<?php include('navigation.php'); ?>

<main class="admin-content">
	<?php include('navigation-top-bar.php'); ?>

	<div class="subpage-menu">
		<ul>
			<li>
				<a href="#">
					Application Log
				</a>
			</li>
			<li>
				<a href="#" class="active">
					Audit Logs
				</a>
			</li>
		</ul>
	</div>

	<div class="main-body-content">
		<div class="white-card">
			
			<div class="search-filter-row">
				<ul>
					<li>
						<a href="javascript:void(0)" class="active"><i class="fa-solid fa-magnifying-glass"></i> Quick Search</a>
					</li>
					<li>
						<a href="#"><i class="fa-solid fa-filter"></i>Advance Filter</a>
					</li>
				</ul>

				<div class="filter-block">
					<form>
						<div class="row">
							<div class="col">
								<div class="form-group">
									<input type="date" name="" placeholder="Date Time" class="form-control">
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<select class="form-control">
										<option>Module</option>
									</select>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<input type="text" name="" placeholder="User ID" class="form-control">
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<select class="form-control">
										<option>Action</option>
									</select>
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

			<table class="style-table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Datetime</th>
						<th>Performed by</th>
						<th>Performed by</th>
						<th>Module</th>
						<th>Identifier</th>
						<th>IP</th>
						<th>Interface</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>01</td>
						<td>11/06/22 11.00AM</td>
						<td>UID20</td>
						<td>Adam</td>
						<td>Policy</td>
						<td>Antony</td>
						<td>192.168.10.1</td>
						<td>Web</td>
						<td>
							<div class="button-group">
								<a href="#audit-log" class="btn btn-sqaure btn-white modal-button"><i class="fa-solid fa-eye"></i></a>
							</div>
						</td>
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
<div class="modal-popup" id="audit-log">
	<div class="modal-popup-wrapper">
		<div class="modal-header">
			<h3>Audit Log Viewer</h3>
			<p>Logs</p>

			<a href="#" class="close-modal close-modal-button"></a>
		</div>

		<div class="modal-body">
			<div class="table-details">
				<ul>
					<li>Module <span>User</span></li>
					<li>User ID <span>UID11</span></li>
					<li>Identifier <span>Web</span></li>
					<li>Date Time <span>03-03-2022 <br />02.00PM</span></li>
				</ul>
				<div class="seperator"></div>
				<ul>
					<li>Action <span>Edit</span></li>
					<li>User Name <span>Alex</span></li>
					<li>Value <span>312</span></li>
				</ul>
			</div>

			<table class="style-table">
				<thead>
					<tr>
						<th>Parameter</th>
						<th>Before</th>
						<th>After</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><label class="badge blue">Status</label></td>
						<td>Active</td>
						<td>Suspended</td>
					</tr>

					<tr>
						<td><label class="badge blue">Department</label></td>
						<td>IT</td>
						<td>Old IT</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="modal-footer">
			<a href="#" class="btn btn-outline-blue close-modal-button">Close</a>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>


