<div class="navigation-topbar">
	<div class="dflex align-items-center justify-space-between w-100">
		<a href="#" class="toggle-button">
			<i class="fa-solid fa-bars"></i>
		</a>
		<div class="title mr-auto">
			<h1><?php echo $pageTitle; ?></h1>
			<p>Parking Management System</p>
		</div>
		<div class="navigation-row">
			<div class="navigation-bar">
				<a href="#">
					<img src="assets/images/icons/notifications.svg" alt="icon" title="Notification">
				</a>

				<div class="notification-popup">
					<div class="notification-bar-header">
						<h3>Notification</h3>
						<div>
							<a href="#">Clear All</a> | <a href="#view-all-notification" class="modal-button">View All</a>
						</div>
					</div>

					<ul>
						<li>
							<div class="icon">
								<img src="assets/images/icons/violations.svg" alt="icon" />
							</div>
							Two vehicles Parked Under Same Person Reported On 20-06-2022 09.45PM
						</li>

						<li>
							<div class="icon">
								<img src="assets/images/icons/violations.svg" alt="icon" />
							</div>
							Two vehicles Parked Under Same Person Reported On 20-06-2022 09.45PM
						</li>

						<li>
							<div class="icon">
								<img src="assets/images/icons/violations.svg" alt="icon" />
							</div>
							Two vehicles Parked Under Same Person Reported On 20-06-2022 09.45PM
						</li>
					</ul>
				</div>
			</div>
			<div class="adnoc-logo">
				<img src="assets/images/common/adnoc-logo.jpg" alt="logo" title="ADNOC" />
			</div>
		</div>
	</div>
</div>

<!-- Modal Popup -->
<div class="modal-popup" id="view-all-notification">
	<div class="modal-main-wrap">
		<div class="modal-popup-wrapper big-modal">
			<div class="modal-header">
				<h3>Notification Details</h3>
				<a href="#" class="close-modal close-modal-button"></a>
			</div>

			<div class="modal-body">
				<div class="reponsive-table">
				<table class="style-table mobile-responsive">
					<thead>
						<tr>
							<th>Notification ID</th>
							<th>Notification Type</th>
							<th>Date Time</th>
							<th>Details</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-label="Id">NT13</td>
							<td data-label="Datetime">Violation</td>
							<td data-label="Performed by">11-06-2022 11.00AM</td>
							<td data-label="Performed by">Dual Parking...</td>
							<td>
								<div class="button-group">
									<a href="#" class="btn btn-sqaure btn-white width-auto"><i class="fa-solid fa-eye"></i> <span>MARK AS READ</span></a>
									<a href="#" class="btn btn-sqaure btn-white "><i class="fa-solid fa-eye"></i></a>
								</div>
							</td>
						</tr>

						<tr>
							<td data-label="Id">NT13</td>
							<td data-label="Datetime">Violation</td>
							<td data-label="Performed by">11-06-2022 11.00AM</td>
							<td data-label="Performed by">Dual Parking...</td>
							<td>
								<div class="button-group">
									<a href="#" class="btn btn-sqaure btn-white width-auto"><i class="fa-solid fa-eye"></i> <span>MARK AS READ</span></a>
									<a href="#" class="btn btn-sqaure btn-white "><i class="fa-solid fa-eye"></i></a>
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

			<div class="modal-footer">
				<a href="#" class="btn btn-outline-blue close-modal-button">Close</a>
			</div>
		</div>
	</div>
</div>