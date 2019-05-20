<?php include( "header.php"); ?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
       Doctor List
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Doctor List</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="box">
			<div class="box-header bg-primary">
				<div class="col-md-6">
					<input type="text" class="form-control" placeholder="Search for Doctor.." name="search">
				</div>
				<div class="col-md-6">
					<div class="">	<a class="btn btn-default st-btn add-student-btn" href="add-doctor.php"><i class="fa fa-plus"></i> Add Doctor</a>
						<button id="ImportStudent" class="btn btn-default dropdown-toggle impt" title=""><i class="fa fa-print"></i> Print</button>
						<button id="ImportStudent" class="btn btn-default dropdown-toggle impt" title=""><i class="fa fa-upload"></i> Import</button>
					</div>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body table-responsive">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Doctor Name</th>
							<th>Designation</th>
							<th>Mobile Number</th>
							<th>Email Id</th>
							<th>Address</th>
							<th>Edit / Delete</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>royal chefs</td>
							<td>Venkateswarlu</td>
							<td>7864539823</td>
							<td>venkateswarlu78@gmail.com</td>
							<td>Plot No. 177, Sri Vani Nilayam, Hyderabad, Telangana - 500072.</td>
							<td> <a href="edit-doctor.php" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil btn btn-warning"></i></a>
								<a href="" data-toggle="tooltip" title="Delete"><i class="fa fa-trash btn btn-danger"></i></a>
							</td>
						</tr>
						<tr>
							<td>Venkatesh</td>
							<td>Dental</td>
							<td>7864539823</td>
							<td>venkatesh67@gmail.com</td>
							<td>Plot No. 177, Sri Vani Nilayam, Hyderabad, Telangana - 500072.</td>
							<td> <a href="edit-seller.php" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil btn btn-warning"></i></a>
								<a href="" data-toggle="tooltip" title="Delete"><i class="fa fa-trash btn btn-danger"></i></a>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>Doctor Name</th>
							<th>Designation</th>
							<th>Mobile Number</th>
							<th>Email Id</th>
							<th>Address</th>
							<th>Edit / Delete</th>
						</tr>
					</tfoot>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>
<?php include( "footer.php"); ?>