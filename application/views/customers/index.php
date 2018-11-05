<div class="col-sm-10" id="main">
	<div class="table-wrapper">
		<h1 class="page-title">Customers</h1>
		<button class="btn btn-default" data-toggle="modal" data-target="#myModal">Add Customer</button>
		<hr>
		<?php if ($this->session->flashdata('success')): ?>
			<div class="alert alert-success">
				<p><?php echo $this->session->flashdata('success') ?></p>
			</div>
		<?php endif; ?> 
		<table class="table table-striped table-bordered table-hover table-responsive" id="customer_table">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Gender</th> 
				<th>Address</th>
				<th>City</th>
				<th>State</th>
				<th>Zip Code</th>
				<th>Mobile Number</th>
				<th>Action</th>
			</tr>
			<?php foreach($customers as $customer): ?>
				<tr>
					<td><?php echo $customer->name ?></td>
					<td><?php echo $customer->email ?></td>
					<td><?php echo $customer->gender ?></td>
					<td><?php echo $customer->address ?></td>
					<td><?php echo $customer->city ?></td>
					<td><?php echo $customer->state ?></td>
					<td><?php echo $customer->zipcode ?></td>
					<td><?php echo $customer->mobileNumber ?></td>
					<td> 
						<button class="btn btn-info edit" data-toggle="modal" data-target="#customer-edit" data-id="<?php echo $customer->id ?>">Edit</button>
						<a class="btn btn-danger btn-sm" href="<?php echo base_url('customers/delete/' . $customer->id) ?>">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
			 
		</table>
	</div>

</div>
<div class="clearfix"></div>

<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">New Customer</h4>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url('customers/insert') ?>" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Name">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label>Gender</label>
						<div class="radio">
							<label><input type="radio" name="gender" checked value="male">Male</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="gender" value="female">Female</label>
						</div>
					</div>

					<div class="form-group">
						<input type="text" class="form-control" name="address" placeholder="Address">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="city" placeholder="City">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="state" placeholder="State">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="zipcode" placeholder="Zip Code">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="mobileNumber" placeholder="Mobile Number">
					</div>
					<div class="form-group">
						<button class="btn btn-success">Save</button>
					</div>
				</form>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>

<div id="customer-edit" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">New Customer</h4>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url('customers/update') ?>" method="POST">
					<input type="hidden" name="customer_id" id="customer_id">
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Name">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label>Gender</label>
						<div class="radio">
							<label><input type="radio" name="gender" checked value="male">Male</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="gender" value="female">Female</label>
						</div>
					</div>

					<div class="form-group">
						<input type="text" class="form-control" name="address" placeholder="Address">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="city" placeholder="City">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="state" placeholder="State">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="zipcode" placeholder="Zip Code">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="mobileNumber" placeholder="Mobile Number">
					</div>
					<div class="form-group">
						<button class="btn btn-success">Save</button>
					</div>
				</form>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>