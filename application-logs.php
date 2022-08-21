<?php $pageTitle = "Logs"?>
<?php include('header.php'); ?>
<?php include('navigation.php'); ?>



<main class="admin-content">
	<?php include('navigation-top-bar.php'); ?>

	<div class="subpage-menu">
		<ul>
			<li>
				<a href="#" class="active">
					Application Log
				</a>
			</li>
			<li>
				<a href="#" >
					Audit Logs
				</a>
			</li>
		</ul>
	</div>

	<div class="main-body-content">
		<div class="white-card">
			

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


<?php include('footer.php'); ?>


