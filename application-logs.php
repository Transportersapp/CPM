<?php $pageTitle = "Logs"?>
<?php include('header.php'); ?>
<?php include('navigation.php'); ?>



<main class="admin-content">
	<?php include('navigation-top-bar.php'); ?>

	<div class="subpage-menu">
		<ul>
			<li>
				<a href="application-logs.php" class="active">
					Application Log
				</a>
			</li>
			<li>
				<a href="audit-logs.php" >
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
						<a href="#quick-search" class="active"><i class="fa-solid fa-magnifying-glass"></i> Quick Search</a>
					</li>
					<li>
						<a href="#"><i class="fa-solid fa-filter"></i>Advance Filter</a>
					</li>
				</ul>

				<div class="filter-block" id="quick-search">
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

			<div class="reponsive-table">
				<table class="style-table mobile-responsive">
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
						<td data-label="Id">01</td>
						<td data-label="Datetime">11/06/22 <br />11.00AM</td>
						<td data-label="User ID">UID20</td>
						<td data-label="Username">Adam</td>
						<td data-label="Event ID">A1</td>
						<td data-label="Event Type">1</td>
						<td data-label="Event Desc">Login</td>
						<td data-label="Status">Sucess</td>
						<td data-label="Error Code">3</td>
						<td data-label="Error Desc">Network Error</td>
						<td data-label="Source IP">192.168.10.1</td>
						<td data-label="Interface">Web</td>
					</tr>
					<tr>
						<td data-label="Id">01</td>
						<td data-label="Datetime">11/06/22 <br />11.00AM</td>
						<td data-label="User ID">UID20</td>
						<td data-label="Username">Adam</td>
						<td data-label="Event ID">A1</td>
						<td data-label="Event Type">1</td>
						<td data-label="Event Desc">Login</td>
						<td data-label="Status">Sucess</td>
						<td data-label="Error Code">3</td>
						<td data-label="Error Desc">Network Error</td>
						<td data-label="Source IP">192.168.10.1</td>
						<td data-label="Interface">Web</td>
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


<?php include('footer.php'); ?>


