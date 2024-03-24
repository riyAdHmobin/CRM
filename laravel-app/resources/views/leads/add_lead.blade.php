@extends('main')
@section('dynamic_page')

<div class="container-fluid p-0">
	<!-- <div class="mb-3">
			<h1 class="h3 d-inline align-middle">Lead Information</h1>
			<a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.html">
			Get more form examples
			</a>
		</div> -->
	<div class="row">
		<form action="" method="POST">
			@csrf
			<div class="card">
				<div class="card-body">
					<h3>Lead Information</h3>
					<div class="row">
						<div class="col-md-6">

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">First Name<span class="text-danger">*</span></h5>
								<input id="first_name" type="text" class="form-control" placeholder="First Name" name="first_name">
							</div>

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Email</h5>
								<input id="email" type="text" class="form-control" placeholder="Email" name="email">
							</div>

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Title<span class="text-danger">*</span></h5>
								<input id="title" type="text" class="form-control" placeholder="Title" name="title">
							</div>

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Lead Status</h5>
								<select id="lead_status" class="form-select mb-3" name="lead_status">
									<option selected>Lead Status</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</div>

						</div>
						<div class="col-md-6">

							

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Last Name<span class="text-danger">*</span></h5>
								<input id="last_name" type="text" class="form-control" placeholder="Last Name" name="last_name">
							</div>

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Phone<span class="text-danger">*</span></h5>
								<input id="phone" type="text" class="form-control" placeholder="Phone" name="phone">
							</div>

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Company Name<span class="text-danger">*</span></h5>
								<input id="title" type="text" class="form-control" placeholder="Company Name" name="company_name">
							</div>

							

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Lead Source</h5>
								<select id="lead_source" class="form-select mb-3" name="lead_source">
									<option selected>Lead Source</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</div>

						</div>
					</div>
				</div>
				<div class="card-body">
					<h3>Address</h3>
					<div class="row">
						<div class="col-md-6">

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Building No.<span class="text-danger">*</span></h5>
								<input type="text" class="form-control" placeholder="Building No." name="building_no">
							</div>

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">State<span class="text-danger">*</span></h5>
								<input type="text" class="form-control" placeholder="State" name="state">
							</div>

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Zip Code<span class="text-danger">*</span></h5>
								<input type="text" class="form-control" placeholder="Zip Code" name="zip_code">
							</div>

						</div>

						<div class="col-md-6">

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Street<span class="text-danger">*</span></h5>
								<input type="text" class="form-control" placeholder="Street" name="street">
							</div>

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">City<span class="text-danger">*</span></h5>
								<input type="text" class="form-control" placeholder="City" name="city">
							</div>

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Country<span class="text-danger">*</span></h5>
								<input type="text" class="form-control" placeholder="Country" name="country">
							</div>

						</div>
					</div>
				</div>
				<div class="card-body">
					<h3>Other Information</h3>
					<div class="row">
						<div class="col-md-6">
							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Note 1</span></h5>
								<textarea class="form-control" rows="3" placeholder="Note 1" name="note_1"></textarea>
							</div>
						</div>
						<div class="col-md-6">
							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Note 2</h5>
								<textarea class="form-control" rows="3" placeholder="Note 2" name="note_2"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="d-grid gap-2 mt-3">
								<button type="submit" class="btn btn-lg btn-secondary">Cancel</button>
							</div>
						</div>
						<div class="col-md-6">
							<div class="d-grid gap-2 mt-3">
								<button type="submit" name="submit" value="submit" class="btn btn-lg btn-primary">Save</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>

		<!-- <div class="col-12 col-lg-6">
			</div> -->
	</div>
</div>

@endsection