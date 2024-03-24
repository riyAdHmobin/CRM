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
		<div class="">
			<div class="card">

				<div class="card-header">
					<h3>Lead Information</h3>
				</div>

				<div class="card-body">
					<div class="row">
						<div class="col-md-6">

							<div style="margin-bottom: 15px;">
								<input id="first_name" type="text" class="form-control" placeholder="First Name">
							</div>

							<div style="margin-bottom: 15px;">
								<input id="last_name" type="text" class="form-control" placeholder="Last Name">
							</div>

							<div style="margin-bottom: 15px;">
								<input id="title" type="text" class="form-control" placeholder="Title">
							</div>

							<div style="margin-bottom: 15px;">
								<input id="title" type="text" class="form-control" placeholder="Company Name">
							</div>

						</div>
						<div class="col-md-6">

							<div style="margin-bottom: 15px;">
								<input id="email" type="text" class="form-control" placeholder="Email">
							</div>

							<div style="margin-bottom: 15px;">
								<input id="phone" type="text" class="form-control" placeholder="Phone">
							</div>

							<div style="margin-bottom: 15px;">
								<select id="lead_status" class="form-select mb-3">
									<option selected>Lead Status</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</div>

							<div style="margin-bottom: 15px;">
								<select id="lead_source" class="form-select mb-3">
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
			</div>

			<div class="card">
				<div class="card-header">
					<h3>Address</h3>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">

							<div style="margin-bottom: 15px;">
								<input type="text" class="form-control" placeholder="Building No.">
							</div>

							<div style="margin-bottom: 15px;">
								<input type="text" class="form-control" placeholder="Street">
							</div>

							<div style="margin-bottom: 15px;">
								<input type="text" class="form-control" placeholder="City">
							</div>

						</div>

						<div class="col-md-6">

							<div style="margin-bottom: 15px;">
								<input type="text" class="form-control" placeholder="State">
							</div>

							<div style="margin-bottom: 15px;">
								<input type="text" class="form-control" placeholder="Zip Code">
							</div>

							<div style="margin-bottom: 15px;">
								<input type="text" class="form-control" placeholder="Country">
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					<h3>Other Information</h3>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<div style="margin-bottom: 15px;">
								<textarea class="form-control" rows="3" placeholder="Note 1"></textarea>
							</div>
						</div>
						<div class="col-md-6">
							<div style="margin-bottom: 15px;">
								<textarea class="form-control" rows="3" placeholder="Note 2"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="">
							<div class="d-grid gap-2 mt-3">
								<button type="submit" name="submit" value="submit" href="index.html" class="btn btn-lg btn-primary">Add Lead</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- <div class="col-12 col-lg-6">
			</div> -->
	</div>
</div>

@endsection